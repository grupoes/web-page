<!doctype html>

<html class="scroll-smooth" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ES Consultores | Diagnóstico de Tesis SaaS</title>
    <link rel="icon" href="assets/img/grupoes.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "secondary-fixed-dim": "#adc7ff",
                        "secondary-fixed": "#d8e2ff",
                        outline: "#757682",
                        "tertiary-fixed-dim": "#ffb59f",
                        secondary: "#0059bb",
                        "on-secondary-fixed-variant": "#004493",
                        "secondary-container": "#0070ea",
                        "on-surface-variant": "#444651",
                        "on-surface": "#1a1b20",
                        "on-error": "#ffffff",
                        "on-tertiary-container": "#da7758",
                        primary: "#001241",
                        "surface-container-lowest": "#ffffff",
                        "surface-container": "#eeedf4",
                        "outline-variant": "#c5c6d2",
                        "surface-container-high": "#e9e7ee",
                        tertiary: "#310700",
                        "on-secondary-container": "#fefcff",
                        "surface-dim": "#dad9e0",
                        "inverse-on-surface": "#f1f0f7",
                        "surface-tint": "#425aa5",
                        "on-primary-container": "#778fdd",
                        background: "#faf8ff",
                        error: "#ba1a1a",
                        "error-container": "#ffdad6",
                        surface: "#faf8ff",
                        "on-primary-fixed": "#00174d",
                        "primary-container": "#00246e",
                        "on-primary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-bright": "#faf8ff",
                        "primary-fixed-dim": "#b5c4ff",
                        "surface-container-highest": "#e3e2e9",
                        "inverse-primary": "#b5c4ff",
                        "on-secondary-fixed": "#001a41",
                        "on-primary-fixed-variant": "#28428b",
                        "tertiary-fixed": "#ffdbd1",
                        "primary-fixed": "#dbe1ff",
                        "surface-container-low": "#f4f3fa",
                        "on-tertiary-fixed-variant": "#7b2e16",
                        "on-tertiary-fixed": "#3a0a00",
                        "on-background": "#1a1b20",
                        "on-secondary": "#ffffff",
                        "tertiary-container": "#551300",
                        "surface-variant": "#e3e2e9",
                        "on-error-container": "#93000a",
                        "inverse-surface": "#2f3035",
                        "brand-green": "#00E8AE",
                        "brand-blue-light": "#0072ED",
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        lg: "1rem",
                        xl: "1.5rem",
                        "2xl": "2rem",
                        "3xl": "3rem",
                        full: "9999px",
                    },
                    spacing: {
                        section: "120px",
                        unit: "4px",
                        xs: "4px",
                        md: "16px",
                        sm: "8px",
                        xl: "40px",
                        lg: "24px",
                    },
                    fontFamily: {
                        display: ["Canaro", "Plus Jakarta Sans", "sans-serif"],
                        body: ["Canaro", "Inter", "sans-serif"],
                        "body-md": ["Canaro", "Inter", "sans-serif"],
                        "body-lg": ["Canaro", "Inter", "sans-serif"],
                        "headline-lg-mobile": ["Canaro", "Plus Jakarta Sans", "sans-serif"],
                        "display-lg": ["Canaro", "Plus Jakarta Sans", "sans-serif"],
                        "headline-md": ["Canaro", "Plus Jakarta Sans", "sans-serif"],
                        "label-bold": ["Canaro", "Inter", "sans-serif"],
                        "headline-lg": ["Canaro", "Plus Jakarta Sans", "sans-serif"],
                    },
                    fontSize: {
                        "body-md": ["16px", {
                            lineHeight: "1.5",
                            fontWeight: "400"
                        }],
                        "body-lg": ["18px", {
                            lineHeight: "1.6",
                            fontWeight: "400"
                        }],
                        "headline-lg-mobile": [
                            "28px",
                            {
                                lineHeight: "1.2",
                                fontWeight: "700"
                            },
                        ],
                        "display-lg": [
                            "56px",
                            {
                                lineHeight: "1.1",
                                letterSpacing: "-0.03em",
                                fontWeight: "800",
                            },
                        ],
                        "headline-md": ["24px", {
                            lineHeight: "1.3",
                            fontWeight: "600"
                        }],
                        "label-bold": ["14px", {
                            lineHeight: "1.2",
                            fontWeight: "600"
                        }],
                        "headline-lg": ["36px", {
                            lineHeight: "1.2",
                            fontWeight: "700"
                        }],
                    },
                },
            },
        };
    </script>
    <style>
        @font-face {
            font-family: 'Canaro';
            src: url('<?= base_url('fonts/Canaro-Book.ttf') ?>') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Canaro';
            src: url('<?= base_url('fonts/Canaro-Medium.ttf') ?>') format('truetype');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Canaro';
            src: url('<?= base_url('fonts/Canaro-Bold.ttf') ?>') format('truetype');
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'Canaro';
            src: url('<?= base_url('fonts/Canaro-ExtraBold.ttf') ?>') format('truetype');
            font-weight: 800;
            font-style: normal;
        }

        .glass-nav {
            background: rgba(250, 248, 255, 0.7);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        }

        .hero-gradient {
            background: radial-gradient(circle at 0% 0%, #001241 0%, #00246e 100%);
        }

        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(2deg);
            }

            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        .progress-glow {
            box-shadow: 0 0 15px rgba(0, 232, 174, 0.4);
        }

        .tactile-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .tactile-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.08);
        }

        .tactile-card:active {
            transform: scale(0.98);
        }

        .section-curve {
            position: relative;
        }

        .section-curve::after {
            content: "";
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            height: 100px;
            background: inherit;
            clip-path: ellipse(50% 50% at 50% 0%);
            z-index: 1;
        }

        .glow-circle {
            filter: drop-shadow(0 0 12px rgba(0, 232, 174, 0.5));
        }

        /* Animación para Escritorio (Derecha a Izquierda) */
        @keyframes pointing-left {

            0%,
            100% {
                transform: translate(40px, -50%);
            }

            50% {
                transform: translate(25px, -50%);
            }
        }

        .animate-pointing-left {
            animation: pointing-left 0.4s ease-in-out infinite;
        }

        @keyframes pointing-down {

            0%,
            100% {
                transform: translateY(-10px);
            }

            50% {
                transform: translateY(5px);
            }
        }

        .animate-pointing-down {
            animation: pointing-down 0.8s ease-in-out infinite;
        }

        /* Animación Pulso para el Botón de WhatsApp */
        @keyframes pulse-whatsapp {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
                box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.4);
            }

            50% {
                transform: scale(1.05);
                opacity: 0.85;
                box-shadow: 0 0 20px 10px rgba(37, 211, 102, 0);
            }
        }

        .animate-pulse-whatsapp {
            animation: pulse-whatsapp 2s infinite ease-in-out;
        }

        /* Animación Intermitente para la Flecha (Aparecer/Desaparecer) */
        @keyframes arrow-intermittent {

            0%,
            20% {
                opacity: 0;
                visibility: hidden;
            }

            30%,
            90% {
                opacity: 1;
                visibility: visible;
            }

            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        /* Combinación de Animaciones para que no se cancelen */
        .animate-combined-down {
            animation: pointing-down 0.5s ease-in-out infinite, arrow-intermittent 6s infinite ease-in-out;
        }

        .animate-combined-left {
            animation: pointing-left 0.5s ease-in-out infinite, arrow-intermittent 6s infinite ease-in-out;
        }

        /* Animación: Deslizamiento Suave (Siguiente) */
        @keyframes slideInRight {
            0% {
                opacity: 0;
                transform: translateX(80px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Animación: Deslizamiento Suave (Anterior) */
        @keyframes slideInLeft {
            0% {
                opacity: 0;
                transform: translateX(-80px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-enter-right {
            animation: slideInRight 0.4s cubic-bezier(0.23, 1, 0.32, 1) forwards;
        }

        .animate-enter-left {
            animation: slideInLeft 0.4s cubic-bezier(0.23, 1, 0.32, 1) forwards;
        }
    </style>
</head>

<body
    class="bg-[#F8FAFF] text-on-surface font-body-md selection:bg-brand-green/30 overflow-hidden">
    <!-- Brand Header (Absolute) -->
    <div class="absolute top-0 left-0 right-0 z-50 pointer-events-none p-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <img
                alt="ES Consultores Logo"
                class="pointer-events-auto w-[140px] h-auto brightness-0 invert"
                src="<?= base_url('assets/img/logo-dark.svg') ?>" />
            <!-- Floating CTA for desktop if scrolled, hidden by default -->
            <a
                class="pointer-events-auto bg-brand-green text-primary font-bold px-8 py-3 rounded-full hover:shadow-[0_8px_20px_rgba(0,232,174,0.3)] transition-all hover:-translate-y-0.5 active:translate-y-0 hidden md:flex items-center gap-2"
                href="#paso-1">
                Comenzar
                <span class="material-symbols-outlined text-[18px]">bolt</span>
            </a>
        </div>
    </div>
    <!-- Section 1: HERO -->
    <section
        id="hero-section"
        class="hero-gradient h-screen h-[100dvh] flex items-center relative overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div
                class="absolute -top-24 -left-24 w-96 h-96 bg-brand-green/10 rounded-full blur-[120px]"></div>
            <div
                class="absolute top-1/2 -right-48 w-[600px] h-[600px] bg-brand-blue-light/10 rounded-full blur-[160px]"></div>
        </div>
        <div
            class="max-w-7xl mx-auto px-lg grid md:grid-cols-2 gap-xl items-center relative z-10 py-20 md:py-section text-center md:text-left">
            <div class="flex flex-col items-center md:items-start space-y-lg">

                <h1 class="font-display-lg text-4xl md:text-display-lg text-white leading-tight md:leading-[1.1]">
                    DIAGNÓSTICA
                    <span class="text-brand-green italic relative">TÚ TESIS<svg
                            class="absolute -bottom-2 left-0 w-full h-2 text-brand-green/30"
                            preserveaspectratio="none"
                            viewbox="0 0 100 10">
                            <path
                                d="M0 5 Q 25 0 50 5 T 100 5"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="4"></path>
                        </svg></span>
                </h1>
                <p
                    class="font-body-lg text-body-lg text-white/70 max-w-lg leading-relaxed mx-auto md:mx-0">
                    Responde 12 preguntas y descubre si tu tema está bien planteado.
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-lg pt-6 w-full sm:w-auto">
                    <a
                        class="bg-brand-green text-primary font-bold px-10 py-4 rounded-full shadow-xl shadow-brand-green/20 hover:shadow-brand-green/40 transition-all hover:scale-105 active:scale-95 w-full sm:w-auto text-center"
                        href="#paso-1">
                        Iniciar Diagnóstico
                    </a>
                    <div class="flex flex-col items-center md:items-start gap-1">
                        <div class="flex -space-x-2">
                            <div
                                class="w-8 h-8 rounded-full border-2 border-primary bg-slate-200"></div>
                            <div
                                class="w-8 h-8 rounded-full border-2 border-primary bg-slate-300"></div>
                            <div
                                class="w-8 h-8 rounded-full border-2 border-primary bg-slate-400"></div>
                        </div>
                        <span class="text-white/60 text-[11px] font-medium tracking-wide">+2.5k Tesistas este mes</span>
                    </div>
                </div>
            </div>
            <div class="relative hidden md:block">
                <div
                    class="absolute inset-0 bg-brand-green/10 blur-[100px] rounded-full floating"
                    style="animation-delay: -2s"></div>
                <div class="relative z-10 floating flex items-center justify-center">
                    <img
                        alt="Mentor LIAM"
                        class="w-full max-w-lg mx-auto drop-shadow-2xl relative z-20"
                        src="<?= base_url('assets/img/liam_icono.png') ?>" />
                </div>
            </div>
        </div>

    </section>
    <!-- Section 2: INITIAL DATA -->
    <section class="py-16 md:py-section bg-[#F8FAFF] relative z-20 hidden" id="paso-1">
        <div class="max-w-3xl mx-auto px-lg">
            <div
                class="w-full bg-slate-200 h-2 rounded-full mb-xl overflow-hidden p-0.5">
                <div
                    class="bg-gradient-to-r from-brand-blue-light to-brand-green h-full w-[8%] rounded-full progress-glow transition-all duration-1000"></div>
            </div>
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6 mb-12 text-center md:text-left">
                <div
                    class="w-20 h-20 rounded-3xl bg-primary flex items-center justify-center border-4 border-white shadow-xl rotate-3 shrink-0 overflow-hidden">
                    <img
                        alt="LIAM mini"
                        class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida/ADBb0uhAFwzOef8eER1SxeUvxjrqHWI9RbEnwMOHAc4Q-8uq78ft-ItZYFUwyErWqBVci9jLEhkp0oNa7mMICLs8HFO2sMX91pdnmyUTld377jNqVWmzbXl1-dtpBZQYr9369BuNTQ-EeKTeJbC6rOwuI2H2hhDLymmlSUVC-7EaBMuKLqh1SprOj2fCwX9c0TyGO4UtFf5bMcgGTi6zuOMUs0NKey4PglIsO5yBfBOHeckRqvGH0lbJXRy3e5F4kPfOQtr9mDsyj0lX" />
                </div>
                <div>
                    <h2
                        class="font-headline-lg text-3xl md:text-headline-lg text-primary tracking-tight">
                        Paso 1: Contexto
                    </h2>
                    <p class="text-on-surface-variant font-medium">
                        Cuéntame un poco sobre tu investigación para calibrar mi análisis.
                    </p>
                </div>
            </div>
            <div class="glass-card p-6 md:p-10 rounded-[2.5rem]">
                <div class="max-w-md mx-auto space-y-2">
                    <label
                        class="text-xs font-bold text-primary/60 uppercase tracking-widest px-1">Nivel académico</label>
                    <select
                        id="select-nivel"
                        class="w-full rounded-2xl border-slate-200 bg-white/50 focus:bg-white focus:ring-4 focus:ring-brand-blue-light/10 focus:border-brand-blue-light py-4 px-6 transition-all appearance-none bg-[url('data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22none%22%20viewBox%3D%220%200%2020%2020%22%3E%3Cpath%20stroke%3D%22%236b7280%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%20stroke-width%3D%221.5%22%20d%3D%22m6%208%204%204%204-4%22%2F%3E%3C%2Fsvg%3E')] bg-[length:1.25rem_1.25rem] bg-[right_1.5rem_center] bg-no-repeat">
                        <option value="" disabled selected>Selecciona tu nivel</option>
                        <option value="Pregrado">Pregrado</option>
                        <option value="Maestría">Maestría</option>
                        <option value="Doctorado">Doctorado</option>
                    </select>
                </div>
                <div class="text-center !mt-4">
                    <p class="text-xs text-on-surface-variant/60 font-medium">
                        Usamos esta información solo para enviarte tu diagnóstico.
                    </p>
                </div>
                <div class="pt-4">
                    <button
                        id="btn-continuar"
                        class="w-full bg-brand-blue-light text-white font-bold py-5 rounded-2xl hover:bg-primary hover:shadow-2xl hover:shadow-brand-blue-light/20 transition-all active:scale-[0.98]">
                        Continuar al diagnóstico
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 3: INTERACTIVE QUIZ -->
    <section
        id="quiz-section"
        class="h-screen h-[100dvh] flex items-center bg-[#F8FAFF] hidden relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-lg">
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center gap-3">
                    <div
                        class="w-10 h-10 rounded-xl bg-brand-blue-light/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-brand-blue-light">psychology</span>
                    </div>
                    <span id="question-counter" class="font-bold text-primary">Pregunta 01 de 12</span>
                </div>
                <div
                    class="flex items-center gap-4 bg-white px-4 py-2 rounded-full shadow-sm">
                    <div class="w-24 bg-slate-100 h-2 rounded-full overflow-hidden">
                        <div
                            id="progress-bar"
                            class="bg-brand-blue-light h-full w-[8%] rounded-full shadow-[0_0_8px_rgba(0,114,237,0.4)] transition-all duration-500"></div>
                    </div>
                    <span
                        id="progress-text"
                        class="text-xs font-bold text-brand-blue-light">8%</span>
                </div>
            </div>
            <div class="space-y-6">
                <!-- Question Card -->
                <div
                    id="question-card"
                    class="glass-card p-6 md:p-8 rounded-[2rem] shadow-xl relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-brand-blue-light/5 rounded-full -mr-16 -mt-16"></div>
                    <h3
                        id="question-text"
                        class="font-headline-md text-headline-md text-primary mb-4 leading-snug">
                        ¿Cuál es el nivel de coherencia entre tu objetivo general y tu
                        problema principal?
                    </h3>
                    <div id="options-container" class="grid gap-3">
                        <!-- Options will be injected here -->
                    </div>
                </div>
                <div class="flex justify-between items-center pt-4">
                    <button
                        id="btn-prev"
                        class="text-on-surface-variant font-bold px-8 py-3 rounded-full hover:bg-slate-200/50 transition-all opacity-50 cursor-not-allowed"
                        disabled>
                        Regresar
                    </button>
                    <div id="btn-next" class="hidden"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 4: ANALYSIS TRANSITION -->
    <section
        id="transition-section"
        class="py-20 md:py-32 bg-primary relative overflow-hidden hidden">
        <!-- Ambient Premium Glows -->
        <div class="absolute inset-0 opacity-40 pointer-events-none">
            <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_15%_50%,_#0072ED22_0%,_transparent_50%)]"></div>
            <div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(circle_at_85%_50%,_#00E8AE22_0%,_transparent_50%)]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-lg relative z-10">
            <div class="grid md:grid-cols-2 gap-12 md:gap-24 items-center">
                <!-- Image Column: Larger and with Orbiting Effects -->
                <div class="relative flex justify-center order-2 md:order-1">
                    <div class="relative w-64 h-64 md:w-[460px] md:h-[460px]">
                        <!-- Orbital Rings -->
                        <div class="absolute inset-0 rounded-full border-4 border-brand-green/20 animate-ping opacity-25"></div>
                        <div class="absolute -inset-8 rounded-full border border-white/5 animate-[spin_20s_linear_infinite]">
                            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-4 h-4 bg-brand-green rounded-full shadow-[0_0_15px_#00E8AE]"></div>
                        </div>
                        <div class="absolute -inset-16 rounded-full border border-white/5 animate-[spin_30s_linear_infinite_reverse]">
                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3 h-3 bg-brand-blue-light rounded-full shadow-[0_0_15px_#0072ED]"></div>
                        </div>

                        <!-- Main Character -->
                        <div class="relative z-10 w-full h-full rounded-full overflow-hidden border-8 border-white/5 shadow-[0_0_100px_rgba(0,114,237,0.2)] bg-primary/40 backdrop-blur-sm">
                            <img
                                alt="LIAM analizando"
                                class="w-full h-full object-cover scale-110"
                                src="<?= base_url('assets/img/liampensativo.png') ?>" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="text-center md:text-left space-y-12 order-1 md:order-2">
                    <div class="space-y-6">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 backdrop-blur-md">
                            <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></span>
                            <span class="text-[10px] font-black text-white/40 uppercase tracking-[0.3em]">LIAM Procesando</span>
                        </div>
                        <h2 class="font-display-lg text-5xl md:text-7xl text-white tracking-tighter leading-tight">
                            Analizando <br />
                            <span class="text-brand-green italic">tu tema...</span>
                        </h2>
                    </div>

                    <div class="space-y-6 max-w-md mx-auto md:mx-0">
                        <div class="w-full bg-white/5 h-4 rounded-full overflow-hidden backdrop-blur-md p-1 border border-white/10 relative">
                            <div class="h-full bg-gradient-to-r from-brand-blue-light via-brand-green to-brand-blue-light w-4/5 rounded-full transition-all duration-1000 shadow-[0_0_20px_rgba(0,232,174,0.6)]"></div>
                        </div>
                        <p class="text-white/20 text-[10px] font-black uppercase tracking-[0.4em] animate-pulse">
                            Sincronizando Metodología
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 4.5: POST-QUIZ NAME REQUEST -->
    <section id="name-step" class="py-10 md:py-20 bg-white hidden relative overflow-hidden">
        <div class="max-w-xl mx-auto px-lg text-center relative z-10">
            <div class="inline-flex items-center gap-2 bg-primary/5 px-4 py-2 rounded-full mb-6">
                <span class="material-symbols-outlined text-primary text-sm">stars</span>
                <span class="text-primary text-xs font-bold uppercase tracking-wider">Análisis Finalizado</span>
            </div>
            <h2 class="font-display-lg text-4xl text-primary mb-6 leading-tight">¡Excelente trabajo!</h2>
            <p class="text-on-surface-variant text-lg mb-10 leading-relaxed">He procesado tus respuestas. ¿Te gustaría que personalice tu reporte final con tu nombre?</p>

            <div id="name-choice-container" class="flex flex-col sm:flex-row justify-center gap-4 mb-8">
                <button id="btn-name-yes" class="flex-1 bg-primary text-white font-bold px-8 py-4 rounded-2xl shadow-lg hover:shadow-primary/20 transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">edit</span>
                    Sí, personalizar
                </button>
                <button id="btn-name-no" class="flex-1 bg-slate-100 text-slate-600 font-bold px-8 py-4 rounded-2xl hover:bg-slate-200 transition-all">
                    No, ver resultados
                </button>
            </div>

            <div id="name-input-container" class="hidden space-y-6 animate-enter-right">
                <div class="space-y-2">
                    <input
                        id="input-nombre"
                        class="w-full rounded-2xl border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-brand-blue-light/10 focus:border-brand-blue-light py-5 px-6 text-center text-xl font-medium transition-all"
                        placeholder="Escribe tu nombre completo"
                        type="text" />
                </div>
                <button id="btn-final-results" class="w-full bg-brand-green text-primary font-bold py-5 rounded-2xl shadow-xl shadow-brand-green/20 hover:shadow-brand-green/40 transition-all flex items-center justify-center gap-3 text-lg">
                    Generar Reporte Personalizado
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>
        <!-- Background elements for name step -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-brand-green/5 rounded-full blur-3xl -mr-32 -mt-32"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-blue-light/5 rounded-full blur-3xl -ml-32 -mb-32"></div>
    </section>

    <!-- Section 5: RESULTS -->
    <section
        id="results-section"
        class="py-12 md:py-20 bg-white relative overflow-hidden hidden">
        <div class="max-w-7xl mx-auto px-lg">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-20 items-center">
                <!-- Info Column (Diagnostics) - Abajo en móvil -->
                <div class="space-y-8 order-2 lg:order-1">
                    <!-- Badge & Title -->
                    <div class="space-y-4 text-center lg:text-left">
                        <div
                            class="inline-flex items-center gap-2 bg-brand-green/10 text-brand-green px-4 py-1.5 rounded-full border border-brand-green/20 transition-all"
                            id="result-badge-container">
                            <span class="material-symbols-outlined text-[16px] fill-1">verified</span>
                            <span
                                class="font-bold text-[10px] uppercase tracking-widest"
                                id="result-badge-text">Análisis Finalizado</span>
                        </div>
                        <h2
                            class="font-display-lg text-2xl sm:text-3xl lg:text-5xl text-primary leading-tight tracking-tighter break-words"
                            id="result-title">
                            Tu tesis tiene un <span class="text-brand-green">potencial sólido</span>
                        </h2>
                    </div>

                    <!-- Situation Card -->
                    <div
                        class="glass-card p-6 rounded-3xl border-l-8 border-l-brand-blue-light shadow-xl shadow-slate-200/50"
                        id="result-cta-card">
                        <div class="flex gap-5">
                            <div
                                class="w-10 h-10 rounded-xl bg-brand-blue-light/10 flex items-center justify-center shrink-0"
                                id="result-icon-container">
                                <span
                                    class="material-symbols-outlined text-brand-blue-light"
                                    id="result-icon">priority_high</span>
                            </div>
                            <div class="space-y-2">
                                <h4 class="font-bold text-primary text-sm uppercase tracking-wider" id="result-subtitle">
                                    Diagnóstico de LIAM
                                </h4>
                                <p
                                    class="text-on-surface-variant text-sm leading-relaxed"
                                    id="result-message">
                                    Cargando resultados...
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-2">
                        <div class="relative w-full sm:w-auto">
                            <!-- Flecha indicadora Responsiva (SVG Curvo y Grueso) - Intermitente -->
                            <div id="whatsapp-arrow" class="absolute hidden z-30 pointer-events-none 
                                /* Móvil: Arriba izquierda */
                                -top-24 left-0 flex flex-col items-start animate-combined-down
                                /* Escritorio: Derecha centro */
                                md:top-1/2 md:left-full md:right-auto md:bottom-auto md:-translate-y-1/2 md:flex-row md:items-center md:gap-3 md:animate-combined-left">

                                <!-- SVG Flecha Curva (Se rota en móvil) -->
                                <svg class="w-16 h-16 text-[#25D366] drop-shadow-lg -rotate-90 md:rotate-0" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M80 20C80 20 70 50 25 50M25 50L45 30M25 50L45 70" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <span class="bg-primary text-white text-[11px] font-black px-4 py-2 rounded-full uppercase tracking-widest whitespace-nowrap shadow-lg -mt-4 md:mt-0">¡Conversemos ahora!</span>
                            </div>

                            <a
                                id="btn-whatsapp"
                                class="bg-[#25D366] text-white font-bold px-8 py-4 rounded-2xl shadow-lg shadow-[#25D366]/20 hover:shadow-[#25D366]/40 transition-all flex items-center justify-center gap-3 hover:-translate-y-1 active:scale-95 w-full animate-pulse-whatsapp"
                                href="https://wa.me/+51976443266"
                                target="_blank">
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                                </svg>
                                Conversar por WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Visual Side (Score) - Arriba en móvil -->
                <div class="flex flex-col items-center justify-center relative order-1 lg:order-2 mb-8 lg:mb-0">
                    <div class="relative w-56 h-56 md:w-80 md:h-80 flex items-center justify-center">
                        <!-- Score Glow -->
                        <div
                            class="absolute inset-0 bg-brand-green/10 rounded-full blur-[60px] animate-pulse"
                            id="score-glow"></div>

                        <!-- Progress Circle -->
                        <svg class="w-full h-full transform -rotate-90 drop-shadow-xl relative z-10">
                            <circle
                                class="text-slate-100"
                                cx="50%"
                                cy="50%"
                                fill="transparent"
                                r="45%"
                                stroke="currentColor"
                                stroke-width="12"></circle>
                            <circle
                                class="text-brand-green glow-circle"
                                id="score-circle"
                                cx="50%"
                                cy="50%"
                                fill="transparent"
                                r="45%"
                                stroke="currentColor"
                                stroke-dasharray="283"
                                stroke-dashoffset="283"
                                stroke-linecap="round"
                                stroke-width="12"
                                style="transition: stroke-dashoffset 2s ease-out"></circle>
                        </svg>

                        <!-- LIAM Result Image (Inside the circle) -->
                        <div class="absolute inset-6 md:inset-10 rounded-full overflow-hidden border-4 border-white shadow-inner bg-slate-50 z-0">
                            <img
                                id="result-liam-img"
                                alt="LIAM Result"
                                class="w-full h-full object-cover scale-110 transition-all duration-700"
                                src="" />
                        </div>

                        <!-- Score Text Tooltip -->
                        <div
                            class="absolute -bottom-4 bg-white px-6 py-2 rounded-2xl shadow-xl border border-slate-100 flex flex-col items-center z-20">
                            <span
                                class="text-3xl md:text-4xl font-black text-primary leading-none tracking-tighter"
                                id="score-text">0%</span>
                            <span
                                class="text-[8px] font-black text-on-surface-variant uppercase tracking-[0.2em] mt-1">Solidez Académica</span>
                        </div>
                    </div>

                    <!-- Mentor Feedback -->
                    <div
                        class="mt-16 glass-card px-8 py-5 rounded-2xl max-w-sm relative"
                        id="mentor-box">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-primary text-white text-[9px] font-black px-3 py-1 rounded-full uppercase tracking-widest">
                            Feedback de LIAM
                        </div>
                        <p class="text-primary font-bold text-sm text-center leading-relaxed italic" id="mentor-text">
                            "Analizando tus resultados..."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const questions = [{
                q: "1. ¿Tu tema está dentro de la línea de investigación de tu carrera?",
                options: ["Sí, ya lo confirmé", "Creo que sí", "No lo sé"],
            },
            {
                q: "2. Tu tema responde a un problema real o solo a un interés personal?",
                options: [
                    "Responde a un problema real con evidencia",
                    "Es interés personal, pero tiene sentido",
                    "Lo elegí solo porque me interesa",
                ],
            },
            {
                q: "3. ¿Tu tesis aporta algo nuevo frente a otras investigaciones?",
                options: [
                    "Sí, tengo claro el aporte",
                    "Es similar, pero cambia el contexto",
                    "No he revisado investigaciones previas",
                ],
            },
            {
                q: "4. ¿Tienes claro el tipo de investigación de tu tema (descriptivo, correlacional, etc.)?",
                options: [
                    "Sí, y mi objetivo está bien planteado.",
                    "Tengo una idea, pero no estoy seguro",
                    "No lo tengo claro.",
                ],
            },
            {
                q: "5. ¿Tienes acceso real a las personas o datos que necesitas ?",
                options: [
                    "Sí, ya tengo el acceso confirmado",
                    "Creo que podré acceder",
                    "No, todavía no he verificado el acceso",
                ],
            },
            {
                q: "6. ¿Tienes autores o estudios confiables sobre tu tema?",
                options: [
                    "Sí, tengo autores claros",
                    "Tengo algunos, pero no estoy seguro",
                    "No he investigado eso aún",
                ],
            },
            {
                q: "7. ¿Tu título sugiere ya un resultado o juicio antes de investigar?",
                options: [
                    "No, mi título es neutro",
                    "Tiene alguna palabra que podría sugerir un resultado",
                    "Sí, ya da por hecho un resultado",
                ],
            },
            {
                q: "8. ¿Tu variable principal tiene un instrumento validado que puedes usar?",
                options: [
                    "Sí, ya identifiqué autor e instrumento",
                    "Sé que existe pero no lo he ubicado",
                    "Pienso construir mi propia encuesta desde cero",
                ],
            },
            {
                q: "9. ¿Tu tema es una investigación o en realidad es una propuesta que quieres aplicar?",
                options: [
                    "Es claramente una investigación",
                    "Es una propuesta de mejora o diseño que después quiero validar",
                    "No tengo claro la diferencia entre ambas",
                ],
            },
            {
                q: "10. Nombre de la variable: ¿Estás usando el mismo término que aparece en estudios o papers académicos?",
                options: [
                    "Sí, uso el mismo nombre que aparece en los papers",
                    "Uso uno parecido, pero no estoy seguro",
                    "No he revisado cómo se usa en estudios",
                ],
            },
            {
                q: "11. Cuando explicas tu tesis, ¿el verbo de tu objetivo refleja exactamente lo que quieres investigar ?",
                options: [
                    "Sí, coincide perfectamente",
                    "Hay algo que no termina de encajar",
                    "No estoy seguro de cuál debería ser el verbo",
                ],
            },
            {
                q: "12. ¿Cuál es la situación actual de tu tema?",
                options: [
                    "Aprobado por mi asesor",
                    "En revisión / con observaciones",
                    "Rechazado u observado más de una vez",
                    "Aún no lo he presentado",
                ],
            },
        ];

        let currentQuestionIndex = 0;
        let answers = [];
        let lastQuestionIndex = -1;

        function updateQuizUI(animate = false, direction = 'next') {
            const card = document.getElementById("question-card");

            if (animate) {
                // Reiniciar y seleccionar animación (Efecto Libro)
                card.classList.remove("animate-enter-right", "animate-enter-left");
                void card.offsetWidth; // Forzar reflujo
                card.classList.add(direction === 'next' ? "animate-enter-right" : "animate-enter-left");
            }

            const q = questions[currentQuestionIndex];
            document.getElementById("question-text").innerText = q.q;
            document.getElementById("question-counter").innerText =
                `Pregunta ${String(currentQuestionIndex + 1).padStart(2, "0")} de 12`;

            const progress = ((currentQuestionIndex + 1) / questions.length) * 100;
            document.getElementById("progress-bar").style.width = `${progress}%`;
            document.getElementById("progress-text").innerText =
                `${Math.round(progress)}%`;

            const container = document.getElementById("options-container");
            container.innerHTML = "";

            const savedAnswer = answers[currentQuestionIndex];

            q.options.forEach((opt, index) => {
                const isSelected = savedAnswer === index;
                const btn = document.createElement("button");
                btn.className = `tactile-card group flex items-center justify-between p-3 md:p-4 rounded-xl border-2 transition-all text-left w-full ${isSelected ? "border-brand-blue-light bg-brand-blue-light/[0.03]" : "border-slate-100 bg-white hover:border-brand-green/30 hover:bg-brand-green/5"}`;
                btn.innerHTML = `
                    <span class="font-medium ${isSelected ? "text-primary font-bold" : "text-on-surface-variant"} group-hover:text-primary transition-colors">${opt}</span>
                    <div class="w-6 h-6 rounded-full border-2 ${isSelected ? "border-brand-green" : "border-slate-200"} group-hover:border-brand-green flex items-center justify-center transition-all">
                        <div class="w-2.5 h-2.5 rounded-full bg-brand-green ${isSelected ? "opacity-100" : "opacity-0"} group-hover:opacity-100 transition-opacity"></div>
                    </div>
                `;
                btn.onclick = () => selectOption(index);
                container.appendChild(btn);
            });

            // Next Button logic removed for automatic progression

            // Update Prev Button
            const btnPrev = document.getElementById("btn-prev");
            if (currentQuestionIndex === 0) {
                btnPrev.classList.add("opacity-50", "cursor-not-allowed");
                btnPrev.disabled = true;
            } else {
                btnPrev.classList.remove("opacity-50", "cursor-not-allowed");
                btnPrev.disabled = false;
            }
        }

        function selectOption(index) {
            answers[currentQuestionIndex] = index;
            // Actualizar sin animar para que se vea la selección de inmediato
            updateQuizUI(false);

            // Deshabilitar clics temporales para evitar doble selección
            const buttons = document.querySelectorAll("#options-container button");
            buttons.forEach(btn => btn.style.pointerEvents = "none");

            // Avance automático tras 400ms para mayor agilidad
            setTimeout(() => {
                handleNext();
            }, 400);
        }

        function handleNext() {
            if (currentQuestionIndex < questions.length - 1) {
                currentQuestionIndex++;
                updateQuizUI(true, 'next');
            } else {
                finishQuiz();
            }
        }

        function finishQuiz() {
            document.getElementById("quiz-section").classList.add("hidden");
            const transitionSection = document.getElementById("transition-section");
            transitionSection.classList.remove("hidden");
            transitionSection.scrollIntoView({
                behavior: "smooth"
            });

            // Calculate Score: Op1 = 2, Op2 = 1, Op3 = 0
            let totalScore = 0;
            answers.forEach((ans) => {
                if (ans === 0) totalScore += 2;
                else if (ans === 1) totalScore += 1;
            });

            setTimeout(() => {
                transitionSection.classList.add("hidden");
                document.getElementById("name-step").classList.remove("hidden");
                document.getElementById("name-step").scrollIntoView({
                    behavior: "smooth"
                });
                // Guardar puntaje para usarlo después de pedir el nombre
                window.finalScore = totalScore;
            }, 3000);
        }

        function displayResults() {
            document.getElementById("name-step").classList.add("hidden");
            document.body.classList.remove("overflow-hidden"); // Desbloquear scroll
            document.getElementById("results-section").classList.remove("hidden");
            document.getElementById("results-section").scrollIntoView({
                behavior: "smooth"
            });

            // Renderizar con el puntaje guardado
            renderResultsUI(window.finalScore);
        }

        function renderResultsUI(score) {
            const nombreCompleto = document.getElementById("input-nombre").value.trim();
            const primerNombre = nombreCompleto.split(' ')[0];

            const resultData = {
                green: {
                    range: [20, 24],
                    percent: Math.round((score / 24) * 100) + "%",
                    title: 'tu tesis está <span class="text-brand-green">bien encaminada</span>',
                    message: "Tu tema está bien encaminado. Lo que te queda por delante es la parte técnica: validación del instrumento, análisis estadístico, redacción de resultados, formato APA, reducción de Turnitin. Te podemos asistir en los bloques que necesites delegar de la operación técnica, mientras tú te concentras en comprender los hallazgos y preparar tu sustentación.",
                    color: "#00E8AE",
                    badge: "VERDE: BIEN ENCAMINADA",
                    mentor: "Excelente base. Un par de correcciones técnicas y estarás listo para sustentar con dominio.",
                    img: "<?= base_url('assets/img/liam_alegre.png') ?>"
                },
                yellow: {
                    range: [12, 19],
                    percent: Math.round((score / 24) * 100) + "%",
                    title: 'tu tesis está en <span class="text-amber-500">zona de riesgo</span>',
                    message: "Tu tema tiene fondo, pero hay desalineaciones que pueden costarte observaciones serias o un dictamen desaprobado. Aún estás en un punto ideal para ordenar tu planteamiento, te acompañamos a organizar tu marco teórico y estructurar tu proyecto paso a paso. Tú aportas la idea; nosotros te asistimos en convertirla en un proyecto bien fundamentado.",
                    color: "#f59e0b",
                    badge: "AMARILLO: EN RIESGO",
                    mentor: "Hay potencial, pero necesitamos alinear la metodología antes de que avance más. ¡Podemos ajustarlo!",
                    img: "<?= base_url('assets/img/liampensativo.png') ?>"
                },
                red: {
                    range: [0, 11],
                    percent: Math.round((score / 24) * 100) + "%",
                    title: 'tu tesis tiene <span class="text-rose-500">problemas estructurales</span>',
                    message: "Tu idea de investigación necesita replantearse antes de seguir avanzando. Tal como está, es probable que enfrentes múltiples observaciones o dificultades para sostenerla académicamente. Si quieres ordenar tu tema y convertirlo en una propuesta sólida, podemos ayudarte a trabajarlo contigo desde el inicio.",
                    color: "#ef4444",
                    badge: "ROJO: PROBLEMAS ESTRUCTURALES",
                    mentor: "Debemos replantear la base. Es mejor corregir ahora que ser rechazado después. ¡Empecemos de nuevo!",
                    img: "<?= base_url('assets/img/liam_triste.png') ?>"
                },
            };

            let res;
            if (score >= 20) res = resultData.green;
            else if (score >= 12) res = resultData.yellow;
            else res = resultData.red;

            // Update UI
            document.getElementById("result-title").innerHTML = `${primerNombre}, ${res.title}`;
            document.getElementById("result-message").innerText = res.message;
            document.getElementById("result-badge-text").innerText = res.badge;
            document.getElementById("score-text").innerText = res.percent;
            document.getElementById("mentor-text").innerText = `"${res.mentor}"`;
            document.getElementById("result-liam-img").src = res.img;

            // Update Circle
            const circle = document.getElementById("score-circle");
            const circumference = 283;
            const offset = circumference - (score / 24) * circumference;
            circle.style.strokeDashoffset = offset;
            circle.style.stroke = res.color;

            // Update Glow & Badge
            document.getElementById("score-glow").style.backgroundColor =
                res.color + "20";
            document.getElementById(
                "result-badge-container",
            ).style.backgroundColor = res.color + "20";
            document.getElementById("result-badge-container").style.color =
                res.color;
            document.getElementById("result-cta-card").style.borderLeftColor =
                res.color;
            document.getElementById("result-icon-container").style.backgroundColor =
                res.color + "10";

            // Mostrar flecha indicadora de WhatsApp tras 2 segundos
            setTimeout(() => {
                const arrow = document.getElementById("whatsapp-arrow");
                if (arrow) {
                    arrow.classList.remove("hidden");
                    arrow.classList.add("flex");
                }
            }, 2000);
        }

        document
            .getElementById("btn-continuar")
            .addEventListener("click", function() {
                const nivelSelect = document.getElementById("select-nivel");

                let hasError = false;

                if (!nivelSelect.value) {
                    nivelSelect.classList.add("border-error", "bg-error/5");
                    hasError = true;
                } else {
                    nivelSelect.classList.remove("border-error", "bg-error/5");
                }

                if (hasError) return;

                document.getElementById("paso-1").classList.add("hidden"); // Ocultar solo Paso 1
                const quizSection = document.getElementById("quiz-section");
                quizSection.classList.remove("hidden");
                
                // Desplazar al quiz y luego bloquear scroll
                quizSection.scrollIntoView({ behavior: 'auto' });
                document.body.classList.add("overflow-hidden"); 
                
                updateQuizUI(true, 'next');
            });

        document
            .getElementById("btn-prev")
            .addEventListener("click", function() {
                if (currentQuestionIndex > 0) {
                    currentQuestionIndex--;
                    updateQuizUI(true, 'prev');
                }
            });
        // Lógica de Paso de Nombre
        document.getElementById("btn-name-yes").addEventListener("click", function() {
            document.getElementById("name-choice-container").classList.add("hidden");
            document.getElementById("name-input-container").classList.remove("hidden");
            document.getElementById("input-nombre").focus();
        });

        document.getElementById("btn-name-no").addEventListener("click", function() {
            displayResults();
        });

        document.getElementById("btn-final-results").addEventListener("click", function() {
            displayResults();
        });

        // Revelar Paso 1 al iniciar
        document.querySelectorAll('a[href="#paso-1"]').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const paso1 = document.getElementById('paso-1');
                paso1.classList.remove('hidden');
                document.body.classList.remove('overflow-hidden'); // Desbloquear scroll
                paso1.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>