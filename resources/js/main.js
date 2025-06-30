// COUNTER ARTICOLI PUBBLICATI
document.addEventListener('DOMContentLoaded', () => {
  const el    = document.querySelector('#article-count');
  const end  = parseInt(el.dataset.final, 10) || 0;
  const dur  = 1000;              // durata animazione in ms
  const step = Math.max(1, Math.floor(dur / end));
  let  i    = 0;

  const timer = setInterval(() => {
    el.textContent = i;
    if (i >= end) clearInterval(timer);
    i++;
  }, step);
});
