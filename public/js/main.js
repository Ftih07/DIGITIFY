document.addEventListener("DOMContentLoaded", () => {
    // === 1. LOGIKA MODAL INTERAKTIF ===
    const modal = document.getElementById("portfolioModal");
    const modalContent = document.getElementById("modalContent");
    const closeBtn = document.getElementById("closeModal");
    const openBtns = document.querySelectorAll(".open-modal-btn");

    const mTitle = document.getElementById("modalTitle");
    const mCategory = document.getElementById("modalCategory");
    const mImage = document.getElementById("modalImage");
    const mDesc = document.getElementById("modalDescription");
    const mLinkCont = document.getElementById("modalLinkContainer");
    const mLink = document.getElementById("modalLink");

    function openModal() {
        modal.classList.remove("hidden");
        modal.classList.add("flex");
        document.body.style.overflow = "hidden";

        void modal.offsetWidth; // Paksa render agar animasi terbaca

        modal.classList.replace("opacity-0", "opacity-100");
        modalContent.classList.remove(
            "scale-95",
            "translate-y-10",
            "opacity-0",
        );
        modalContent.classList.add("scale-100", "translate-y-0", "opacity-100");
    }

    function closeModal() {
        modal.classList.replace("opacity-100", "opacity-0");
        modalContent.classList.remove(
            "scale-100",
            "translate-y-0",
            "opacity-100",
        );
        modalContent.classList.add("scale-95", "translate-y-10", "opacity-0");

        setTimeout(() => {
            modal.classList.remove("flex");
            modal.classList.add("hidden");
            document.body.style.overflow = "auto";
        }, 300);
    }

    if (openBtns.length > 0) {
        openBtns.forEach((btn) => {
            btn.addEventListener("click", function () {
                mTitle.textContent = this.dataset.title;
                mCategory.textContent = this.dataset.category;
                mImage.src = this.dataset.image;
                mDesc.innerText = this.dataset.desc;

                // Reset dan timpa class warna kategori di Modal
                mCategory.className =
                    "inline-block px-3 py-1 border text-xs font-bold rounded-full mb-3 " +
                    this.dataset.color;

                if (this.dataset.link && this.dataset.link !== "") {
                    mLinkCont.classList.remove("hidden");
                    mLink.href = this.dataset.link;
                } else {
                    mLinkCont.classList.add("hidden");
                }

                openModal();
            });
        });

        closeBtn.addEventListener("click", closeModal);
        modal.addEventListener("click", function (e) {
            if (e.target === modal) closeModal();
        });
    }

    // === 2. ANIMASI MOBILE MENU & HAMBURGER ===
    const mobileBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const iconMenu = document.getElementById("icon-menu");
    const iconClose = document.getElementById("icon-close");
    const mobileLinks = document.querySelectorAll(".mobile-link");
    let isMenuOpen = false;

    function toggleMenu() {
        isMenuOpen = !isMenuOpen;
        if (isMenuOpen) {
            mobileMenu.classList.remove(
                "-translate-y-4",
                "opacity-0",
                "pointer-events-none",
            );
            mobileMenu.classList.add(
                "translate-y-0",
                "opacity-100",
                "pointer-events-auto",
            );

            iconMenu.classList.replace("scale-100", "scale-50");
            iconMenu.classList.replace("opacity-100", "opacity-0");
            iconMenu.classList.add("rotate-90");

            iconClose.classList.replace("scale-50", "scale-100");
            iconClose.classList.replace("opacity-0", "opacity-100");
            iconClose.classList.replace("rotate-[-90deg]", "rotate-0");
        } else {
            mobileMenu.classList.remove(
                "translate-y-0",
                "opacity-100",
                "pointer-events-auto",
            );
            mobileMenu.classList.add(
                "-translate-y-4",
                "opacity-0",
                "pointer-events-none",
            );

            iconMenu.classList.replace("scale-50", "scale-100");
            iconMenu.classList.replace("opacity-0", "opacity-100");
            iconMenu.classList.remove("rotate-90");

            iconClose.classList.replace("scale-100", "scale-50");
            iconClose.classList.replace("opacity-100", "opacity-0");
            iconClose.classList.replace("rotate-0", "rotate-[-90deg]");
        }
    }

    if (mobileBtn) {
        mobileBtn.addEventListener("click", toggleMenu);
        mobileLinks.forEach((link) => {
            link.addEventListener("click", () => {
                if (isMenuOpen) toggleMenu();
            });
        });
    }

    // === 3. ANIMASI SMOOTH FAQ ACCORDION ===
    const faqButtons = document.querySelectorAll(".faq-btn");
    if (faqButtons.length > 0) {
        faqButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector(".faq-icon");
                const isOpen = content.style.maxHeight;

                document.querySelectorAll(".faq-content").forEach((el) => {
                    if (el !== content) {
                        el.style.maxHeight = null;
                        el.previousElementSibling
                            .querySelector(".faq-icon")
                            .classList.remove("rotate-180");
                    }
                });

                if (isOpen) {
                    content.style.maxHeight = null;
                    icon.classList.remove("rotate-180");
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                    icon.classList.add("rotate-180");
                }
            });
        });
    }

    // === 4. ACTIVE NAVBAR SCROLL ===
    const sections = document.querySelectorAll("section, footer");
    const navLinks = document.querySelectorAll(".nav-link, .mobile-link");

    if (sections.length > 0 && navLinks.length > 0) {
        window.addEventListener("scroll", () => {
            let current = "";

            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 120) {
                    current = section.getAttribute("id");
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove("text-[#FF8323]", "font-semibold");
                if (!link.classList.contains("mobile-link")) {
                    link.classList.add("text-gray-700");
                }

                if (
                    link.getAttribute("href").includes(current) &&
                    current !== ""
                ) {
                    link.classList.remove("text-gray-700");
                    link.classList.add("text-[#FF8323]", "font-semibold");
                }
            });
        });
    }

    // === 5. FILTER PORTOFOLIO SMOOTH ===
    const filterButtons = document.querySelectorAll(".filter-btn");
    const portfolioCards = document.querySelectorAll(".portfolio-card");

    if (filterButtons.length > 0) {
        filterButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const filterValue = button.getAttribute("data-filter");

                filterButtons.forEach((btn) => {
                    btn.classList.remove(
                        "bg-[#0A192F]",
                        "text-white",
                        "shadow-md",
                    );
                    btn.classList.add("bg-slate-100", "text-gray-600");
                });

                button.classList.remove("bg-slate-100", "text-gray-600");
                button.classList.add("bg-[#0A192F]", "text-white", "shadow-md");

                portfolioCards.forEach((card) => {
                    const cardCategory = card.getAttribute("data-category");

                    if (filterValue === "all" || cardCategory === filterValue) {
                        card.style.display = "block";
                        setTimeout(() => {
                            card.style.opacity = "1";
                            card.style.transform = "scale(1) translateY(0)";
                        }, 10);
                    } else {
                        card.style.opacity = "0";
                        card.style.transform = "scale(0.9) translateY(10px)";
                        setTimeout(() => {
                            if (card.style.opacity === "0") {
                                card.style.display = "none";
                            }
                        }, 500);
                    }
                });
            });
        });
    }
});
