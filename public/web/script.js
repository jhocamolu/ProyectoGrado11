
  // Reveal on scroll
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.1 });
  reveals.forEach(r => observer.observe(r));

  // FAQ toggle
  function toggleFaq(el) {
    const item = el.parentElement;
    const wasOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!wasOpen) item.classList.add('open');
  }

  // Form submit
  function submitForm() {
    const nombres = document.getElementById('nombres').value.trim();
    const apellidos = document.getElementById('apellidos').value.trim();
    const doc = document.getElementById('numDoc').value.trim();
    const grado = document.getElementById('grado').value;
    const telefono = document.getElementById('telefono').value.trim();
    const institucion = document.getElementById('institucion').value;
    const programa = document.getElementById('programa').value;

    if (!nombres || !apellidos || !doc || !grado || !telefono || !institucion || !programa) {
      alert('Por favor completa todos los campos obligatorios.');
      return;
    }

    document.querySelector('.form-submit').disabled = true;
    document.querySelector('.form-submit').textContent = 'Enviando...';
    setTimeout(() => {
      document.querySelector('.form-submit').style.display = 'none';
      document.getElementById('successMsg').style.display = 'block';
    }, 1200);
  }
