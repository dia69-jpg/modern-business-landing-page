/* ============================================
   DROPDOWN MENU — Mobile
   ============================================ */
const dropdownBtn = document.getElementById('dropdownBtn');
const myDropdown  = document.getElementById('myDropdown');

dropdownBtn.addEventListener('click', (e) => {
  e.stopPropagation();
  myDropdown.classList.toggle('show');
});

window.addEventListener('click', () => {
  myDropdown.classList.remove('show');
});

/* ============================================
   NAV ACTIVE LINK ON SCROLL
   ============================================ */
const sections  = document.querySelectorAll('section[id]');
const menuLinks = document.querySelectorAll('.menu a');

function updateActiveLink() {
  const scrollY = window.scrollY + 140;
  sections.forEach(section => {
    if (scrollY >= section.offsetTop && scrollY < section.offsetTop + section.offsetHeight) {
      menuLinks.forEach(a => a.classList.remove('active'));
      const link = document.querySelector(`.menu a[href="#${section.id}"]`);
      if (link) link.classList.add('active');
    }
  });
}

window.addEventListener('scroll', updateActiveLink);
updateActiveLink();

/* ============================================
   SCROLL REVEAL
   ============================================ */
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      // stagger delay pour les éléments siblings
      const siblings = [...entry.target.parentElement.children];
      const index = siblings.indexOf(entry.target);
      entry.target.style.transitionDelay = `${index * 0.08}s`;
      entry.target.classList.add('visible');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

/* ============================================
   CONTACT FORM
   ============================================ */
const form    = document.getElementById('contactForm');
const success = document.getElementById('contactSuccess');

if (form) {
  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const required = form.querySelectorAll('[required]');
    let valid = true;
    required.forEach(field => {
      if (!field.value.trim()) {
        valid = false;
        field.style.borderColor = 'var(--pink)';
        field.addEventListener('input', () => {
          field.style.borderColor = '';
        }, { once: true });
      }
    });

    if (!valid) return;

    // Simulate send
    const btn = form.querySelector('.submit-btn');
    btn.textContent = 'Sending…';
    btn.disabled = true;

    setTimeout(() => {
      form.style.display = 'none';
      success.style.display = 'block';
    }, 1200);
  });
}

/* ============================================
   NAVBAR — shrink on scroll
   ============================================ */
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 60) {
    navbar.style.padding    = '8px 20px';
    navbar.style.margin     = '10px 20px';
    navbar.style.boxShadow  = '0 0 40px rgba(123,47,255,0.25)';
  } else {
    navbar.style.padding    = '';
    navbar.style.margin     = '';
    navbar.style.boxShadow  = '';
  }
});
