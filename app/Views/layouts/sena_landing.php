<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SENA AMT · Programa Articulación con la Media</title>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,600;1,9..40,300&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --sena-green: #009A44;
      --sena-dark: #006B2D;
      --sena-light: #7ED957;
      --cream: #F5F0E8;
      --charcoal: #1A1A1A;
      --mid: #3D3D3D;
      --accent: #FFD100;
      --red: #E63946;
      --white: #FFFFFF;
      --radius: 16px;
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--charcoal);
      color: var(--white);
      overflow-x: hidden;
    }

    /* ─── NAV ─── */
    nav {
      position: fixed; top: 0; left: 0; right: 0; z-index: 100;
      display: flex; align-items: center; justify-content: space-between;
      padding: 18px 48px;
      background: rgba(26,26,26,0.85);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255,255,255,0.06);
    }
    .nav-logo {
      display: flex; align-items: center; gap: 12px;
    }
    .nav-logo-icon {
      width: 40px; height: 40px; background: var(--sena-green);
      border-radius: 10px; display: flex; align-items: center; justify-content: center;
      font-family: 'Bebas Neue', sans-serif; font-size: 22px; color: white; letter-spacing: 1px;
    }
    .nav-logo span {
      font-family: 'Bebas Neue', sans-serif; font-size: 20px; letter-spacing: 2px; color: var(--white);
    }
    .nav-logo small {
      display: block; font-size: 10px; color: rgba(255,255,255,0.45); letter-spacing: 1px; font-family: 'Space Mono', monospace;
    }
    .nav-links { display: flex; align-items: center; gap: 32px; }
    .nav-links a {
      color: rgba(255,255,255,0.65); text-decoration: none; font-size: 14px; font-weight: 400;
      transition: color .2s; letter-spacing: .3px;
    }
    .nav-links a:hover { color: var(--sena-light); }
    .btn-login {
      background: transparent; border: 1.5px solid var(--sena-green);
      color: var(--sena-light) !important; padding: 8px 22px; border-radius: 8px;
      font-size: 13px !important; font-weight: 600 !important; letter-spacing: .8px !important;
      transition: background .2s, color .2s !important; font-family: 'Space Mono', monospace !important;
    }
    .btn-login:hover { background: var(--sena-green) !important; color: white !important; }

    /* ─── HERO ─── */
    .hero {
      min-height: 100vh;
      display: grid; grid-template-columns: 1fr 1fr;
      align-items: center;
      padding: 120px 48px 80px;
      position: relative; overflow: hidden;
      gap: 60px;
    }
    .hero-bg {
      position: absolute; inset: 0; z-index: 0;
      background:
        radial-gradient(ellipse 60% 60% at 80% 40%, rgba(0,154,68,0.18) 0%, transparent 70%),
        radial-gradient(ellipse 40% 50% at 10% 80%, rgba(0,107,45,0.15) 0%, transparent 60%);
    }
    .hero-grid {
      position: absolute; inset: 0; z-index: 0;
      background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
      background-size: 50px 50px;
    }
    .hero-content { position: relative; z-index: 1; }
    .hero-badge {
      display: inline-flex; align-items: center; gap: 8px;
      background: rgba(0,154,68,0.15); border: 1px solid rgba(0,154,68,0.4);
      padding: 6px 16px; border-radius: 100px; margin-bottom: 28px;
      font-family: 'Space Mono', monospace; font-size: 11px; color: var(--sena-light); letter-spacing: 1px;
    }
    .hero-badge::before { content: '●'; color: var(--sena-light); font-size: 8px; animation: pulse 2s infinite; }
    @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:.3} }
    h1 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: clamp(56px, 7vw, 92px);
      line-height: .95; letter-spacing: 1px;
      margin-bottom: 24px;
    }
    h1 .accent { color: var(--sena-green); display: block; }
    h1 .sub-accent { color: var(--accent); }
    .hero-desc {
      font-size: 17px; line-height: 1.65; color: rgba(255,255,255,0.6);
      max-width: 460px; margin-bottom: 40px; font-weight: 300;
    }
    .hero-desc strong { color: var(--white); font-weight: 600; }
    .hero-cta { display: flex; gap: 16px; flex-wrap: wrap; }
    .btn-primary {
      background: var(--sena-green); color: white;
      padding: 16px 36px; border-radius: 12px; border: none;
      font-size: 15px; font-weight: 600; cursor: pointer; text-decoration: none;
      display: inline-flex; align-items: center; gap: 10px;
      transition: transform .2s, box-shadow .2s;
      box-shadow: 0 0 30px rgba(0,154,68,0.35);
    }
    .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 8px 40px rgba(0,154,68,0.55); }
    .btn-secondary {
      background: rgba(255,255,255,0.06); color: white;
      padding: 16px 32px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.12);
      font-size: 15px; font-weight: 400; cursor: pointer; text-decoration: none;
      display: inline-flex; align-items: center; gap: 10px;
      transition: background .2s;
    }
    .btn-secondary:hover { background: rgba(255,255,255,0.1); }

    /* Hero visual side */
    .hero-visual { position: relative; z-index: 1; }
    .stats-card {
      background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);
      border-radius: var(--radius); padding: 32px; margin-bottom: 20px;
      backdrop-filter: blur(10px);
    }
    .stats-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }
    .stat-item {}
    .stat-number {
      font-family: 'Bebas Neue', sans-serif; font-size: 48px; color: var(--sena-light);
      line-height: 1;
    }
    .stat-label { font-size: 12px; color: rgba(255,255,255,0.45); letter-spacing: .5px; margin-top: 4px; }
    .program-tags { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 24px; }
    .tag {
      background: rgba(0,154,68,0.12); border: 1px solid rgba(0,154,68,0.25);
      color: var(--sena-light); padding: 6px 14px; border-radius: 100px;
      font-size: 12px; font-weight: 500;
    }
    .info-card {
      background: linear-gradient(135deg, rgba(0,154,68,0.15), rgba(0,107,45,0.08));
      border: 1px solid rgba(0,154,68,0.3);
      border-radius: var(--radius); padding: 24px;
      display: flex; align-items: center; gap: 20px;
    }
    .info-icon {
      width: 48px; height: 48px; background: var(--sena-green); border-radius: 12px;
      display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0;
    }
    .info-card h4 { font-size: 15px; font-weight: 600; margin-bottom: 4px; }
    .info-card p { font-size: 13px; color: rgba(255,255,255,0.55); line-height: 1.5; }

    /* ─── BENEFICIOS ─── */
    .section { padding: 100px 48px; }
    .section-label {
      font-family: 'Space Mono', monospace; font-size: 11px; color: var(--sena-light);
      letter-spacing: 3px; text-transform: uppercase; margin-bottom: 14px;
    }
    .section-title {
      font-family: 'Bebas Neue', sans-serif; font-size: clamp(38px, 5vw, 60px);
      line-height: 1; margin-bottom: 16px;
    }
    .section-desc { color: rgba(255,255,255,0.5); font-size: 16px; max-width: 520px; line-height: 1.6; }

    .benefits { background: #111111; }
    .benefits-inner { max-width: 1200px; margin: 0 auto; }
    .benefits-header { text-align: center; margin-bottom: 64px; }
    .benefits-header .section-desc { margin: 0 auto; }
    .cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
    .benefit-card {
      background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.07);
      border-radius: var(--radius); padding: 36px 28px;
      transition: border-color .3s, transform .3s;
      position: relative; overflow: hidden;
    }
    .benefit-card::before {
      content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px;
      background: var(--sena-green); transform: scaleX(0); transform-origin: left;
      transition: transform .3s;
    }
    .benefit-card:hover { border-color: rgba(0,154,68,0.3); transform: translateY(-4px); }
    .benefit-card:hover::before { transform: scaleX(1); }
    .card-icon { font-size: 36px; margin-bottom: 20px; }
    .card-title { font-size: 18px; font-weight: 600; margin-bottom: 10px; }
    .card-desc { font-size: 14px; color: rgba(255,255,255,0.5); line-height: 1.65; }

    /* ─── PROCESO ─── */
    .process { background: var(--charcoal); }
    .process-inner { max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
    .steps { margin-top: 40px; display: flex; flex-direction: column; gap: 28px; }
    .step { display: flex; gap: 20px; align-items: flex-start; }
    .step-num {
      width: 40px; height: 40px; background: var(--sena-green); border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      font-family: 'Space Mono', monospace; font-size: 14px; font-weight: 700;
      flex-shrink: 0;
    }
    .step-content h4 { font-size: 16px; font-weight: 600; margin-bottom: 6px; }
    .step-content p { font-size: 14px; color: rgba(255,255,255,0.5); line-height: 1.6; }
    .process-visual {
      background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.07);
      border-radius: 24px; padding: 40px; position: relative; overflow: hidden;
    }
    .timeline-bar {
      display: flex; flex-direction: column; gap: 0;
    }
    .tl-item {
      display: flex; gap: 16px; padding: 20px 0; border-bottom: 1px solid rgba(255,255,255,0.06);
      position: relative;
    }
    .tl-item:last-child { border-bottom: none; }
    .tl-dot {
      width: 12px; height: 12px; border-radius: 50%; background: var(--sena-green);
      margin-top: 5px; flex-shrink: 0; box-shadow: 0 0 10px rgba(0,154,68,0.6);
    }
    .tl-dot.inactive { background: rgba(255,255,255,0.2); box-shadow: none; }
    .tl-text h5 { font-size: 14px; font-weight: 600; margin-bottom: 4px; }
    .tl-text span { font-size: 12px; color: rgba(255,255,255,0.4); font-family: 'Space Mono', monospace; }
    .progress-label { font-family: 'Space Mono', monospace; font-size: 11px; color: var(--sena-light); margin-bottom: 16px; letter-spacing: 1px; }
    .progress-bar { height: 6px; background: rgba(255,255,255,0.08); border-radius: 100px; margin-bottom: 32px; }
    .progress-fill { height: 100%; width: 65%; background: linear-gradient(90deg, var(--sena-dark), var(--sena-light)); border-radius: 100px; }

    /* ─── FORMULARIO ─── */
    .form-section {
      background: #0D0D0D;
      padding: 100px 48px;
    }
    .form-inner { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1.1fr; gap: 80px; align-items: start; }
    .form-info { padding-top: 8px; }
    .form-info .section-title { margin-bottom: 20px; }
    .form-info .section-desc { margin-bottom: 32px; }
    .req-list { display: flex; flex-direction: column; gap: 14px; }
    .req-item { display: flex; gap: 12px; align-items: center; }
    .req-check {
      width: 26px; height: 26px; background: rgba(0,154,68,0.15); border: 1px solid rgba(0,154,68,0.3);
      border-radius: 8px; display: flex; align-items: center; justify-content: center;
      font-size: 13px; flex-shrink: 0;
    }
    .req-item span { font-size: 14px; color: rgba(255,255,255,0.65); line-height: 1.5; }

    /* Form box */
    .form-box {
      background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);
      border-radius: 24px; padding: 44px 40px;
    }
    .form-box h3 { font-size: 22px; font-weight: 600; margin-bottom: 28px; }
    .form-group { margin-bottom: 20px; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
    label { display: block; font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.55); letter-spacing: .8px; text-transform: uppercase; margin-bottom: 8px; }
    input, select, textarea {
      width: 100%; background: rgba(255,255,255,0.05); border: 1.5px solid rgba(255,255,255,0.1);
      border-radius: 10px; padding: 13px 16px; color: white; font-family: 'DM Sans', sans-serif;
      font-size: 14px; transition: border-color .2s, box-shadow .2s; outline: none; appearance: none;
    }
    input:focus, select:focus, textarea:focus {
      border-color: var(--sena-green);
      box-shadow: 0 0 0 3px rgba(0,154,68,0.15);
    }
    input::placeholder, textarea::placeholder { color: rgba(255,255,255,0.25); }
    select option { background: #1a1a1a; color: white; }
    textarea { resize: none; height: 100px; }
    .form-submit {
      width: 100%; background: var(--sena-green); color: white;
      padding: 16px; border: none; border-radius: 12px;
      font-size: 15px; font-weight: 600; cursor: pointer; margin-top: 8px;
      transition: transform .2s, box-shadow .2s;
      box-shadow: 0 4px 24px rgba(0,154,68,0.3);
      font-family: 'DM Sans', sans-serif;
    }
    .form-submit:hover { transform: translateY(-2px); box-shadow: 0 8px 36px rgba(0,154,68,0.5); }
    .form-note { font-size: 12px; color: rgba(255,255,255,0.3); text-align: center; margin-top: 14px; line-height: 1.5; }

    /* Success message */
    .success-msg {
      display: none; background: rgba(0,154,68,0.12); border: 1px solid rgba(0,154,68,0.35);
      border-radius: 12px; padding: 20px; text-align: center; margin-top: 16px;
    }
    .success-msg span { font-size: 28px; display: block; margin-bottom: 8px; }
    .success-msg p { font-size: 14px; color: var(--sena-light); }

    /* ─── FAQ ─── */
    .faq { background: var(--charcoal); padding: 100px 48px; }
    .faq-inner { max-width: 860px; margin: 0 auto; }
    .faq-header { text-align: center; margin-bottom: 56px; }
    .faq-list { display: flex; flex-direction: column; gap: 12px; }
    .faq-item {
      background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.07);
      border-radius: 12px; overflow: hidden;
    }
    .faq-q {
      padding: 20px 24px; display: flex; justify-content: space-between; align-items: center;
      cursor: pointer; font-size: 15px; font-weight: 500; user-select: none;
      transition: background .2s;
    }
    .faq-q:hover { background: rgba(255,255,255,0.03); }
    .faq-icon { font-size: 20px; color: var(--sena-green); transition: transform .3s; flex-shrink: 0; }
    .faq-a { display: none; padding: 0 24px 20px; font-size: 14px; color: rgba(255,255,255,0.5); line-height: 1.7; }
    .faq-item.open .faq-a { display: block; }
    .faq-item.open .faq-icon { transform: rotate(45deg); }
    .faq-item.open { border-color: rgba(0,154,68,0.3); }

    /* ─── FOOTER ─── */
    footer {
      background: #0a0a0a; border-top: 1px solid rgba(255,255,255,0.06);
      padding: 60px 48px 36px;
    }
    .footer-inner { max-width: 1200px; margin: 0 auto; }
    .footer-top { display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr; gap: 48px; margin-bottom: 48px; }
    .footer-brand p { font-size: 13px; color: rgba(255,255,255,0.4); line-height: 1.7; margin-top: 16px; max-width: 260px; }
    .footer-col h5 { font-size: 12px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: rgba(255,255,255,0.5); margin-bottom: 16px; font-family: 'Space Mono', monospace; }
    .footer-col a { display: block; color: rgba(255,255,255,0.45); text-decoration: none; font-size: 13px; margin-bottom: 10px; transition: color .2s; }
    .footer-col a:hover { color: var(--sena-light); }
    .footer-bottom { border-top: 1px solid rgba(255,255,255,0.06); padding-top: 28px; display: flex; justify-content: space-between; align-items: center; }
    .footer-bottom p { font-size: 12px; color: rgba(255,255,255,0.25); }
    .footer-badge {
      background: rgba(0,154,68,0.12); border: 1px solid rgba(0,154,68,0.2);
      color: var(--sena-light); padding: 6px 14px; border-radius: 100px; font-size: 11px;
      font-family: 'Space Mono', monospace; letter-spacing: .8px;
    }

    /* ─── SCROLL ANIMATIONS ─── */
    .reveal { opacity: 0; transform: translateY(28px); transition: opacity .6s ease, transform .6s ease; }
    .reveal.visible { opacity: 1; transform: none; }

    /* ─── RESPONSIVE ─── */
    @media (max-width: 900px) {
      nav { padding: 16px 24px; }
      .nav-links a:not(.btn-login) { display: none; }
      .hero { grid-template-columns: 1fr; padding: 100px 24px 60px; gap: 40px; }
      .cards-grid { grid-template-columns: 1fr; }
      .process-inner { grid-template-columns: 1fr; gap: 40px; }
      .form-inner { grid-template-columns: 1fr; gap: 40px; }
      .section { padding: 70px 24px; }
      .form-section { padding: 70px 24px; }
      .faq { padding: 70px 24px; }
      footer { padding: 48px 24px 28px; }
      .footer-top { grid-template-columns: 1fr 1fr; gap: 32px; }
      .form-row { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<!-- NAV -->
<nav>
  <div class="nav-logo">
    <div class="nav-logo-icon">S</div>
    <div>
      <span>SENA AMT</span>
      <small>ARTICULACIÓN CON LA MEDIA</small>
    </div>
  </div>
  <div class="nav-links">
    <a href="#beneficios">Beneficios</a>
    <a href="#proceso">Proceso</a>
    <a href="#inscripcion">Inscripción</a>
    <a href="#faq">Preguntas</a>
    <a href="<?= base_url('admin') ?>" class="btn-login">🔐 Acceso Admin</a>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>

  <div class="hero-content reveal">
    <div class="hero-badge">Convocatoria 2025 · Abierta</div>
    <h1>
      Tu futuro<br>
      <span class="accent">empieza</span>
      <span class="sub-accent">hoy</span>
    </h1>
    <p class="hero-desc">
      Estudiantes de grado <strong>9° y 10°</strong> de instituciones educativas con convenio SENA en el
      <strong>Área Metropolitana de Tunja (AMT)</strong> pueden formarse como técnicos sin costo y sin salir de su colegio.
    </p>
    <div class="hero-cta">
      <a href="#inscripcion" class="btn-primary">
        ✏️ Inscribirme ahora
      </a>
      <a href="#proceso" class="btn-secondary">
        Ver cómo funciona →
      </a>
    </div>
  </div>

  <div class="hero-visual reveal" style="transition-delay:.15s">
    <div class="stats-card">
      <div class="stats-grid">
        <div class="stat-item">
          <div class="stat-number">2.400+</div>
          <div class="stat-label">Aprendices activos AMT</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">18+</div>
          <div class="stat-label">Instituciones aliadas</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">100%</div>
          <div class="stat-label">Gratuito para estudiantes</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">2 años</div>
          <div class="stat-label">Doble titulación</div>
        </div>
      </div>
      <div class="program-tags">
        <span class="tag">Sistemas</span>
        <span class="tag">Contabilidad</span>
        <span class="tag">Salud</span>
        <span class="tag">Diseño</span>
        <span class="tag">Logística</span>
        <span class="tag">+ más programas</span>
      </div>
    </div>
    <div class="info-card">
      <div class="info-icon">🎓</div>
      <div>
        <h4>Doble titulación garantizada</h4>
        <p>Terminas el bachillerato <em>y</em> obtienes tu certificado técnico SENA al mismo tiempo.</p>
      </div>
    </div>
  </div>
</section>

<!-- BENEFICIOS -->
<section class="section benefits" id="beneficios">
  <div class="benefits-inner">
    <div class="benefits-header reveal">
      <div class="section-label">¿Por qué inscribirse?</div>
      <h2 class="section-title">Beneficios del Programa</h2>
      <p class="section-desc">La articulación SENA – Media te da ventajas reales desde que estás en el colegio.</p>
    </div>
    <div class="cards-grid">
      <div class="benefit-card reveal">
        <div class="card-icon">🆓</div>
        <h3 class="card-title">Completamente gratuito</h3>
        <p class="card-desc">Sin matrículas, sin materiales extra. El programa es financiado 100% por el SENA.</p>
      </div>
      <div class="benefit-card reveal" style="transition-delay:.1s">
        <div class="card-icon">📜</div>
        <h3 class="card-title">Certificado técnico oficial</h3>
        <p class="card-desc">Al graduarte recibes título SENA reconocido a nivel nacional e internacional.</p>
      </div>
      <div class="benefit-card reveal" style="transition-delay:.2s">
        <div class="card-icon">⚡</div>
        <h3 class="card-title">Ingreso directo a la media</h3>
        <p class="card-desc">Sin perder clases del colegio, los módulos se integran a tu horario escolar.</p>
      </div>
      <div class="benefit-card reveal">
        <div class="card-icon">🚀</div>
        <h3 class="card-title">Ventaja en educación superior</h3>
        <p class="card-desc">Accedes con prioridad a programas tecnológicos y universitarios del SENA.</p>
      </div>
      <div class="benefit-card reveal" style="transition-delay:.1s">
        <div class="card-icon">💼</div>
        <h3 class="card-title">Empleabilidad desde joven</h3>
        <p class="card-desc">Tu título técnico te permite trabajar mientras estudias o al terminar el bachillerato.</p>
      </div>
      <div class="benefit-card reveal" style="transition-delay:.2s">
        <div class="card-icon">🤝</div>
        <h3 class="card-title">Red SENA</h3>
        <p class="card-desc">Formas parte de la comunidad de aprendices más grande de Latinoamérica.</p>
      </div>
    </div>
  </div>
</section>

<!-- PROCESO -->
<section class="section process" id="proceso">
  <div class="process-inner">
    <div class="reveal">
      <div class="section-label">Paso a paso</div>
      <h2 class="section-title">¿Cómo funciona?</h2>
      <p class="section-desc">Cuatro pasos sencillos para comenzar tu formación técnica sin costo.</p>
      <div class="steps">
        <div class="step">
          <div class="step-num">01</div>
          <div class="step-content">
            <h4>Verifica que tu institución tiene convenio</h4>
            <p>Consulta con tu colegio o directamente con el SENA AMT si están articulados con el programa.</p>
          </div>
        </div>
        <div class="step">
          <div class="step-num">02</div>
          <div class="step-content">
            <h4>Completa el formulario de inscripción</h4>
            <p>Llena el formulario aquí abajo con tus datos y el programa de tu interés.</p>
          </div>
        </div>
        <div class="step">
          <div class="step-num">03</div>
          <div class="step-content">
            <h4>Espera la confirmación</h4>
            <p>Un asesor SENA se pondrá en contacto contigo o con tu acudiente para confirmar tu cupo.</p>
          </div>
        </div>
        <div class="step">
          <div class="step-num">04</div>
          <div class="step-content">
            <h4>¡Inicia tu formación técnica!</h4>
            <p>Comienza clases junto con tu grado. En 2 años recibirás tu título técnico SENA.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="process-visual reveal" style="transition-delay:.2s">
      <p class="progress-label">PROGRESO TÍPICO DEL PROGRAMA</p>
      <div class="progress-bar"><div class="progress-fill"></div></div>
      <div class="timeline-bar">
        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-text">
            <h5>Inscripción y matrícula</h5>
            <span>Inicio del proceso</span>
          </div>
        </div>
        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-text">
            <h5>Inducción y bienvenida SENA</h5>
            <span>Semana 1</span>
          </div>
        </div>
        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-text">
            <h5>Módulos formativos integrados</h5>
            <span>Grados 9° y 10°</span>
          </div>
        </div>
        <div class="tl-item">
          <div class="tl-dot inactive"></div>
          <div class="tl-text">
            <h5>Proyecto final y evaluación</h5>
            <span>Grado 11°</span>
          </div>
        </div>
        <div class="tl-item">
          <div class="tl-dot inactive"></div>
          <div class="tl-text">
            <h5>🎓 Certificación técnica SENA</h5>
            <span>Al terminar bachillerato</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FORMULARIO -->
<section class="form-section" id="inscripcion">
  <div class="form-inner">
    <div class="form-info reveal">
      <div class="section-label">Inscripción gratuita</div>
      <h2 class="section-title">¡Regístrate<br>ahora!</h2>
      <p class="section-desc">Completa el formulario y un asesor SENA te contactará para confirmar tu cupo en el programa.</p>
      <div class="req-list" style="margin-top:32px">
        <div class="req-item">
          <div class="req-check">✓</div>
          <span>Ser estudiante de grado 9° o 10°</span>
        </div>
        <div class="req-item">
          <div class="req-check">✓</div>
          <span>Tu institución debe tener convenio con SENA AMT</span>
        </div>
        <div class="req-item">
          <div class="req-check">✓</div>
          <span>Tener documento de identidad (TI o CC)</span>
        </div>
        <div class="req-item">
          <div class="req-check">✓</div>
          <span>Autorización del acudiente (menor de edad)</span>
        </div>
        <div class="req-item">
          <div class="req-check">✓</div>
          <span>No tener pérdidas académicas acumuladas</span>
        </div>
      </div>
    </div>

    <div class="form-box reveal" style="transition-delay:.15s">
      <h3>Formulario de inscripción</h3>
      <div id="registrationForm">
        <div class="form-row">
          <div class="form-group">
            <label>Nombres</label>
            <input type="text" placeholder="Ej: Laura Alejandra" id="nombres"/>
          </div>
          <div class="form-group">
            <label>Apellidos</label>
            <input type="text" placeholder="Ej: Rodríguez Pérez" id="apellidos"/>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label>Tipo de documento</label>
            <select id="tipoDoc">
              <option value="">Seleccionar...</option>
              <option>Tarjeta de Identidad</option>
              <option>Cédula de Ciudadanía</option>
            </select>
          </div>
          <div class="form-group">
            <label>Número de documento</label>
            <input type="text" placeholder="0000000000" id="numDoc"/>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label>Grado actual</label>
            <select id="grado">
              <option value="">Seleccionar...</option>
              <option>Grado 9°</option>
              <option>Grado 10°</option>
            </select>
          </div>
          <div class="form-group">
            <label>Teléfono de contacto</label>
            <input type="tel" placeholder="300 000 0000" id="telefono"/>
          </div>
        </div>
        <div class="form-group">
          <label>Institución educativa</label>
          <select id="institucion">
            <option value="">Seleccionar tu colegio...</option>
            <option>Colegio Boyacá</option>
            <option>INEM Carlos Arturo Torres</option>
            <option>Institución Educativa Técnica La Paz</option>
            <option>Normal Superior Leonidas Rubio Villegas</option>
            <option>Colegio Juan de Castellanos</option>
            <option>Otra institución convenio SENA</option>
          </select>
        </div>
        <div class="form-group">
          <label>Programa de interés</label>
          <select id="programa">
            <option value="">Seleccionar programa...</option>
            <option>Técnico en Sistemas</option>
            <option>Técnico en Contabilización de Operaciones</option>
            <option>Técnico en Salud Oral</option>
            <option>Técnico en Diseño Gráfico</option>
            <option>Técnico en Logística Empresarial</option>
            <option>Técnico en Mantenimiento de Computadores</option>
            <option>Otro (consultar disponibilidad)</option>
          </select>
        </div>
        <div class="form-group">
          <label>Mensaje adicional (opcional)</label>
          <textarea placeholder="¿Tienes alguna pregunta o comentario para el asesor SENA?"></textarea>
        </div>
        <button class="form-submit" onclick="submitForm()">Enviar inscripción →</button>
        <p class="form-note">Al enviar aceptas el tratamiento de tus datos conforme a la política de privacidad del SENA.</p>
        <div class="success-msg" id="successMsg">
          <span>🎉</span>
          <p><strong>¡Inscripción recibida!</strong><br>Un asesor SENA te contactará pronto. Revisa tu teléfono.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq" id="faq">
  <div class="faq-inner">
    <div class="faq-header reveal">
      <div class="section-label">Resolvemos tus dudas</div>
      <h2 class="section-title">Preguntas frecuentes</h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          ¿El programa tiene algún costo?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a">No. La formación técnica en la articulación SENA–Media es completamente gratuita para los estudiantes. El SENA financia el 100% del programa.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          ¿Cómo sé si mi colegio tiene convenio con el SENA?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a">Puedes preguntarle directamente al coordinador académico de tu institución, o comunicarte con el Centro de Formación SENA más cercano en el AMT. También puedes inscribirte aquí y nuestros asesores verificarán el convenio contigo.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          ¿Puedo inscribirme si estoy en grado 9° o debo esperar grado 10°?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a">Puedes inscribirte desde grado 9°. Dependiendo del programa y la institución, el proceso de formación inicia en 9° o en 10°. El asesor te indicará exactamente cuándo arrancan tus módulos.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          ¿Interfiere con mis clases normales del colegio?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a">No. Los módulos SENA están diseñados para integrarse con el horario escolar, en muchos casos reemplazando algunas asignaturas electivas. No perderás materias ni tendrás sobrecarga académica.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          ¿Qué pasa si me quedo con pérdidas en el colegio?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a">Una situación académica crítica puede afectar tu continuidad en el programa. Por ello, el SENA exige un rendimiento académico mínimo. Si tienes dificultades, consulta con tu instructor a tiempo.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q" onclick="toggleFaq(this)">
          ¿El certificado SENA sirve para entrar a la universidad?
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-a">Sí. El título técnico SENA es reconocido por muchas universidades en Colombia y puede validar créditos o darte acceso directo a tecnologías afines. Además, te da ventaja competitiva al buscar empleo.</div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <div class="nav-logo">
          <div class="nav-logo-icon">S</div>
          <div>
            <span style="font-family:'Bebas Neue',sans-serif;font-size:18px;letter-spacing:2px">SENA AMT</span>
            <small style="font-size:10px;color:rgba(255,255,255,0.35);letter-spacing:1px;font-family:'Space Mono',monospace;display:block">ARTICULACIÓN CON LA MEDIA</small>
          </div>
        </div>
        <p>Formación técnica gratuita para jóvenes del Área Metropolitana de Tunja. Una oportunidad que transforma vidas.</p>
      </div>
      <div class="footer-col">
        <h5>Programa</h5>
        <a href="#beneficios">Beneficios</a>
        <a href="#proceso">Cómo funciona</a>
        <a href="#inscripcion">Inscripción</a>
        <a href="#faq">Preguntas frecuentes</a>
      </div>
      <div class="footer-col">
        <h5>Programas</h5>
        <a href="#">Sistemas</a>
        <a href="#">Contabilidad</a>
        <a href="#">Salud Oral</a>
        <a href="#">Diseño Gráfico</a>
        <a href="#">Logística</a>
      </div>
      <div class="footer-col">
        <h5>Contacto</h5>
        <a href="#">SENA Regional Boyacá</a>
        <a href="#">Centro de Formación AMT</a>
        <a href="dashboard.html">Acceso administrativo</a>
        <a href="#">Línea SENA: 018000 910270</a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2025 SENA – Servicio Nacional de Aprendizaje · Todos los derechos reservados</p>
      <span class="footer-badge">AMT · Boyacá · Colombia</span>
    </div>
  </div>
</footer>

<script>
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
</script>
</body>
</html>
