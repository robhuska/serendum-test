// Slideout logic
const openBtn = document.getElementById('open-slideout');
const closeBtn = document.getElementById('close-slideout');
const panel = document.getElementById('slideout-panel');

// Create overlay dynamically
const overlay = document.createElement('div');
overlay.id = 'slideout-overlay';
overlay.className = 'fixed inset-0 bg-black/10 z-40 hidden transition-opacity duration-300';
document.body.appendChild(overlay);

function openSlideout() {
  overlay.classList.remove('hidden');
  setTimeout(() => {
    overlay.classList.add('opacity-100');
    panel.classList.remove('translate-x-full');
  }, 10);
}

function closeSlideout() {
  overlay.classList.remove('opacity-100');
  panel.classList.add('translate-x-full');
  setTimeout(() => {
    overlay.classList.add('hidden');
  }, 300);
}

openBtn.addEventListener('click', openSlideout);
closeBtn.addEventListener('click', closeSlideout);
overlay.addEventListener('click', closeSlideout);
