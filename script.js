document.addEventListener('DOMContentLoaded', () => {
  // --- 1. Language Dropdown Logic ---
  const langBtn = document.getElementById('lang-btn');
  const langOptions = document.getElementById('lang-options');
  const footerLang = document.getElementById('selectedLanguage');

  // Toggle dropdown
  langBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    langOptions.classList.toggle('show');
  });

  // Select language
  langOptions.querySelectorAll('button').forEach(button => {
    button.addEventListener('click', () => {
      const selectedLang = button.dataset.lang || button.textContent.trim();
      langBtn.textContent = ` ${selectedLang}`;
      langOptions.classList.remove('show');

      if (footerLang) {
        footerLang.textContent = selectedLang;
      }
    });
  });

  // Hide dropdown on outside click
  document.addEventListener('click', function (e) {
    if (!langBtn.contains(e.target) && !langOptions.contains(e.target)) {
      langOptions.classList.remove('show');
    }
  });

  // --- 2. Scroll Arrows for Testimonials ---
  const testimonialContainer = document.getElementById("testimonialContainer");
  const scrollLeft = document.getElementById("scrollLeft");
  const scrollRight = document.getElementById("scrollRight");

  if (testimonialContainer && scrollLeft && scrollRight) {
    scrollLeft.addEventListener("click", () => {
      testimonialContainer.scrollBy({ left: -320, behavior: "smooth" });
    });

    scrollRight.addEventListener("click", () => {
      testimonialContainer.scrollBy({ left: 320, behavior: "smooth" });
    });
  }

  // --- 3. Email Subscription Validation ---
  const subscribeBtn = document.getElementById("subscribeBtn");
  const emailInput = document.getElementById("emailInput");

  if (subscribeBtn && emailInput) {
    subscribeBtn.addEventListener("click", () => {
      const email = emailInput.value.trim();
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
      } else {
        alert("Subscribed successfully with: " + email);
        emailInput.value = "";
      }
    });
  }
});
