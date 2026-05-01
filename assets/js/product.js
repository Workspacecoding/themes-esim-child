
  // Tab switching
  function switchTab(btn, panelId) {
    document.querySelectorAll('.esim-tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.esim-tab-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById(panelId).classList.add('active');
  }

  // slider
  const sliderTrack = document.getElementById('sliderTrack');

if (sliderTrack && !sliderTrack.dataset.duplicated) {
  sliderTrack.innerHTML += sliderTrack.innerHTML;
  sliderTrack.dataset.duplicated = 'true';
}

document.addEventListener('DOMContentLoaded', function () {
  const reviewSliderTrack = document.getElementById('reviewSliderTrack');

  if (reviewSliderTrack && !reviewSliderTrack.dataset.duplicated) {
    reviewSliderTrack.innerHTML += reviewSliderTrack.innerHTML;
    reviewSliderTrack.dataset.duplicated = 'true';
  }
});

    // FAQ toggle
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
      const btn = item.querySelector('.faq-question');
      btn.addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });

    document.addEventListener('DOMContentLoaded', function () {
      console.log('JS loaded');
    
      const track = document.getElementById('sliderTrack');
    
      if (track && !track.dataset.duplicated) {
        track.innerHTML += track.innerHTML;
        track.dataset.duplicated = 'true';
      }
    });
  