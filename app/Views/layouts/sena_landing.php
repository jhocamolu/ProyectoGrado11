<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SENA AMT · Programa Articulación con la Media</title>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,600;1,9..40,300&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="<?= base_url('web/style.css') ?>" />
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

<script src="<?= base_url('web/script.js') ?>"></script>
</body>
</html>
