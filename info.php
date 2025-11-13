<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Barra de Navegación — Trámites Ciudadanos</title>
  <style>
    /* RESET BÁSICO */
    * { box-sizing: border-box; margin: 0; padding: 0; }
    html, body { height: 100%; font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; background: #f4f6f8; color: #0f1724; }

    /* BARRA */
    .navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      padding: 0.6rem 1rem;
      background: linear-gradient(90deg, #ffffff 0%, #f8fafc 100%);
      border-bottom: 1px solid rgba(15,23,36,0.06);
      box-shadow: 0 6px 18px rgba(12,27,48,0.04);
      position: sticky;
      top: 0;
      z-index: 50;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      text-decoration: none;
      color: inherit;
    }
    .brand .logo {
      width: 40px; height: 40px; border-radius: 8px;
      display: grid; place-items: center;
      background: linear-gradient(135deg,#0ea5a4,#06b6d4);
      color: white; font-weight: 700;
      box-shadow: 0 4px 10px rgba(6,95,114,0.12);
      font-family: "Segoe UI", Roboto, Arial;
    }
    .brand .name { font-size: 1.05rem; font-weight: 600; letter-spacing: -0.2px; }

    /* MENU PRINCIPAL */
    .nav-links {
      display: flex;
      gap: 0.5rem;
      align-items: center;
    }
    .nav-item {
      position: relative;
      list-style: none;
    }
    .nav-link {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 0.9rem;
      border-radius: 8px;
      text-decoration: none;
      color: #0f1724;
      font-weight: 500;
      font-size: 0.95rem;
      transition: background .18s, transform .08s;
    }
    .nav-link:hover { background: rgba(14,165,132,0.06); transform: translateY(-1px); }

    /* DROPDOWN */
    .dropdown {
      position: absolute;
      top: calc(100% + 10px);
      left: 0;
      min-width: 260px;
      background: white;
      border-radius: 10px;
      padding: 0.5rem;
      box-shadow: 0 12px 30px rgba(8,15,25,0.07);
      border: 1px solid rgba(12,23,36,0.04);
      display: none;
    }
    .nav-item.show .dropdown { display: block; }

    .dropdown a {
      display: block;
      padding: 0.5rem 0.7rem;
      border-radius: 8px;
      text-decoration: none;
      color: #0f1724;
      font-size: 0.92rem;
      font-weight: 500;
    }
    .dropdown a:hover { background: rgba(6,95,114,0.04); }

    /* ICONOS (SVG) */
    .icon {
      width: 18px; height: 18px; display: inline-block; vertical-align: middle;
    }

    /* BUSCADOR LIGERO */
    .search {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      background: #f1f5f9;
      padding: 0.35rem 0.5rem;
      border-radius: 999px;
      border: 1px solid rgba(15,23,36,0.03);
      min-width: 220px;
    }
    .search input {
      border: none; background: transparent; outline: none; font-size: 0.95rem;
    }

    /* BOTON */
    .btn {
      padding: 0.5rem 0.9rem;
      border-radius: 9px;
      background: linear-gradient(90deg,#06b6d4,#0ea5a4);
      color: white; text-decoration: none; font-weight: 600;
      box-shadow: 0 6px 18px rgba(6,95,114,0.12);
      border: none; cursor: pointer;
    }

    /* RESPONSIVE: HAMBURGER */
    .hamburger {
      display: none;
      background: transparent;
      border: none;
      padding: 0.4rem;
      border-radius: 8px;
    }
    @media (max-width: 880px) {
      .nav-links { display: none; }
      .hamburger { display: inline-flex; }
      .mobile-menu {
        display: none;
        position: absolute;
        top: 64px;
        left: 0;
        right: 0;
        background: white;
        padding: 0.8rem;
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
        box-shadow: 0 14px 50px rgba(10,20,30,0.08);
      }
      .mobile-menu.show { display: block; }
      .search { display: none; }
    }

    /* CONTENIDO DE EJEMPLO */
    main { padding: 2rem; max-width: 980px; margin: 0 auto; }
    .hero {
      background: linear-gradient(180deg, rgba(6,95,114,0.03), rgba(6,95,114,0.01));
      border-radius: 12px; padding: 1.4rem; margin-top: 1rem;
      border: 1px solid rgba(6,95,114,0.03);
    }
    .hero h1 { font-size: 1.35rem; margin-bottom: 0.6rem; }
    .list-tramites { display: grid; gap: .5rem; grid-template-columns: repeat(auto-fit,minmax(220px,1fr)); margin-top: .8rem; }
    .tramite {
      background: white; padding: .8rem; border-radius: 10px;
      border: 1px solid rgba(12,23,36,0.04);
      box-shadow: 0 6px 12px rgba(6,95,114,0.03);
      font-weight: 600; font-size: .95rem;
    }
    .tramite small { display:block; font-weight:400; font-size:.82rem; color:#475569; margin-top:.3rem; }
  </style>
</head>
<body>

  <header class="navbar" role="banner">
    <a class="brand" href="#" aria-label="Inicio — Trámites Ciudadanos">
      <div class="logo" aria-hidden="true">TR</div>
      <div class="name">
        Trámites MX
      </div>
    </a>

    

        
    <p> <form action="https://www.google.com/search" method="get">
  <input type="text" name="q" placeholder="Buscar en Google">
  <input type="submit" value="Buscar"></p>

      <!-- HAMBURGER (mobile) -->
      
    </div>
  </header>

  <!-- MENÚ MÓVIL -->
  

  <main>
    <section class="hero" aria-labelledby="hero-title">
      <h1 id="hero-title">servicios ciudadanos más solicitados en México</h1>
      <p>Lista rápida con algunos servicios que realizan las personas en México.</p>

      <div class="list-tramites" aria-hidden="false">
        <div class="tramite">
          <p><a href="https://www.sky.com.mx/servicios/satelital/donde-recargar">PAGO DEL SKY</a></p>
    
          <small>PAGO DEL SERVICIO DE SKY EL CUAL SIRVE PARA VER NOVELAS Y PELICULAS Y NAVEGAR </small>
        </div>
        <div class="tramite">
          <p><a href="https://telmex.com/web/guest/pago_sin_login">TELMEX</a></p>
          <small>PARA REALIZAR PAGOS ASERCA DEL SERVICIO DE INTERNET EL CUAL FACILITA PARA NAVEGAR EN LA RED</small>
        </div>
        <div class="tramite">
          <p><a href="https://www.telcel.com/personas/compra-paquetes-y-recargas">RECARGAS (TELCEL)</a></p>
          <small>TIENE LA FUNCION DE REALIZAR RECARGAAS DE SALDO PARA LOS DISPOSITIVOS MOVILES DE LA CIUDADANIA.</small>
        </div>
        <div class="tramite">
        <p><a href="https://www.dish.com.mx/">PAGO DISH</a></p>
          <small>PAGO DEL SERVICIO DE DISH</small>
        </div>
        <div class="tramite">
          <p><a href="https://interorbith.net/cliente/login">PAGO ORBIT</a></p>
          <small>PAGO DEL SERVICIO DE ORBIT</small>
        </div>
        
    </section>

  </main>

  <script>
    // Toggle dropdown (desktop)
    const tramitesItem = document.getElementById('tramites-menu');
    tramitesItem.querySelector('.nav-link').addEventListener('click', function (e) {
      e.preventDefault();
      const expanded = tramitesItem.classList.toggle('show');
      this.setAttribute('aria-expanded', expanded ? 'true' : 'false');
    });

    // Cerrar dropdown al hacer click fuera
    document.addEventListener('click', (e) => {
      if (!tramitesItem.contains(e.target)) {
        tramitesItem.classList.remove('show');
        tramitesItem.querySelector('.nav-link').setAttribute('aria-expanded', 'false');
      }
    });

    // Toggle mobile menu
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    hamburger.addEventListener('click', () => {
      const show = mobileMenu.classList.toggle('show');
      mobileMenu.setAttribute('aria-hidden', show ? 'false' : 'true');
    });
  </script>
</body>
</html>
