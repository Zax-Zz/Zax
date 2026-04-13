<?php
function generateRandomSubdomain($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
    }   

$folder = generateRandomSubdomain();
?>
<html lang="id"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Create Webp Vip</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #ffffff; /* Putih sebagai dasar bersih */
            color: #111;
        }

        .font-game { font-family: 'Orbitron', sans-serif; }

        .premium-overlay {
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
        }

        .modal-content {
            background: white;
            border-top: 8px solid #ff0000;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .card-custom {
            background: #ffffff;
            border: 2px solid #f3f4f6;
            transition: all 0.3s ease;
        }

        .card-custom:hover {
            border-color: #ff0000;
            box-shadow: 0 10px 20px rgba(255, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        .img-box {
            position: relative;
            width: 100%;
            height: 170px;
            overflow: hidden;
            background: #000;
        }

        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.5s;
        }

        .card-custom:hover .img-box img {
            scale: 1.05;
        }

        .navbar {
            background: #000000;
            border-bottom: 4px solid #ff0000;
        }

        .btn-gen {
            background: #000000;
            color: #ffffff;
            border: 1px solid #000000;
            font-weight: 800;
            transition: all 0.3s;
        }

        .btn-gen:hover {
            background: #ff0000;
            border-color: #ff0000;
            color: white;
        }

        .badge-premium {
            background: #ff0000;
            color: white;
            font-size: 8px;
            font-weight: 900;
            padding: 2px 8px;
            text-transform: uppercase;
        }
    </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.fixed{position:fixed}.absolute{position:absolute}.sticky{position:sticky}.inset-0{inset:0px}.left-0{left:0px}.top-0{top:0px}.z-50{z-index:50}.z-\[100\]{z-index:100}.mx-auto{margin-left:auto;margin-right:auto}.mb-1{margin-bottom:0.25rem}.mb-4{margin-bottom:1rem}.mb-5{margin-bottom:1.25rem}.mb-6{margin-bottom:1.5rem}.mr-2{margin-right:0.5rem}.mt-2{margin-top:0.5rem}.mt-10{margin-top:2.5rem}.flex{display:flex}.grid{display:grid}.h-2{height:0.5rem}.h-20{height:5rem}.h-8{height:2rem}.w-2{width:0.5rem}.w-20{width:5rem}.w-full{width:100%}.max-w-sm{max-width:24rem}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}@keyframes pulse{50%{opacity:.5}}.animate-pulse{animation:pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-4{gap:1rem}.space-x-3 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(0.75rem * var(--tw-space-x-reverse));margin-left:calc(0.75rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-3 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.75rem * var(--tw-space-y-reverse))}.overflow-hidden{overflow:hidden}.rounded{border-radius:0.25rem}.rounded-2xl{border-radius:1rem}.rounded-3xl{border-radius:1.5rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-xl{border-radius:0.75rem}.border{border-width:1px}.border-l-8{border-left-width:8px}.border-t-4{border-top-width:4px}.border-gray-100{--tw-border-opacity:1;border-color:rgb(243 244 246 / var(--tw-border-opacity, 1))}.border-red-600{--tw-border-opacity:1;border-color:rgb(220 38 38 / var(--tw-border-opacity, 1))}.bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.bg-gray-50{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-green-500{--tw-bg-opacity:1;background-color:rgb(34 197 94 / var(--tw-bg-opacity, 1))}.bg-red-600{--tw-bg-opacity:1;background-color:rgb(220 38 38 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-white\/10{background-color:rgb(255 255 255 / 0.1)}.p-4{padding:1rem}.p-8{padding:2rem}.px-2{padding-left:0.5rem;padding-right:0.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-1{padding-top:0.25rem;padding-bottom:0.25rem}.py-2\.5{padding-top:0.625rem;padding-bottom:0.625rem}.py-4{padding-top:1rem;padding-bottom:1rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.pb-10{padding-bottom:2.5rem}.pb-4{padding-bottom:1rem}.pl-4{padding-left:1rem}.pt-10{padding-top:2.5rem}.text-left{text-align:left}.text-center{text-align:center}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-\[10px\]{font-size:10px}.text-\[11px\]{font-size:11px}.text-\[9px\]{font-size:9px}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-2xl{font-size:1.5rem;line-height:2rem}.text-\[8px\]{font-size:8px}.font-black{font-weight:900}.font-bold{font-weight:700}.uppercase{text-transform:uppercase}.italic{font-style:italic}.leading-none{line-height:1}.tracking-\[0\.2em\]{letter-spacing:0.2em}.tracking-\[0\.4em\]{letter-spacing:0.4em}.tracking-tighter{letter-spacing:-0.05em}.tracking-widest{letter-spacing:0.1em}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-green-600{--tw-text-opacity:1;color:rgb(22 163 74 / var(--tw-text-opacity, 1))}.text-red-600{--tw-text-opacity:1;color:rgb(220 38 38 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-black\/20{--tw-shadow-color:rgb(0 0 0 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-colors{transition-property:color, background-color, border-color, fill, stroke, -webkit-text-decoration-color;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, -webkit-text-decoration-color;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.hover\:bg-black:hover{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}@media (min-width: 768px){.md\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}}</style></head>
<body class="pb-10">
<div id="pModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 premium-overlay" onclick="closeM()" style="opacity: 0;">
    <div class="modal-content max-w-sm w-full rounded-3xl p-8 transform transition-all" onclick="event.stopPropagation()">
        <div class="text-center">
            <div class="w-20 h-20 bg-black text-white rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-xl shadow-black/20">
                <i class="fas fa-bolt text-red-600 text-4xl"></i>
            </div>
            <h2 class="font-game text-xl font-black text-black mb-1 uppercase">Premium <span class="text-red-600">Aktif</span></h2>
            <p class="text-gray-500 font-bold text-[9px] tracking-[0.2em] uppercase mb-6">Selamat Menggunakan Fitur Premium</p>
            
            <div class="bg-gray-50 rounded-2xl p-4 text-left border border-gray-100 mb-6 space-y-3">
                <p class="text-[10px] font-black text-black uppercase flex items-center"><i class="fas fa-check-circle text-red-600 mr-2"></i> Fast Deployment 2026</p>
                <p class="text-[10px] font-black text-black uppercase flex items-center"><i class="fas fa-check-circle text-red-600 mr-2"></i> NO CURL , S2M</p>
                <p class="text-[10px] font-black text-green-600 uppercase flex items-center"><i class="fas fa-shield-alt text-red-600 mr-2"></i> Ressult Anti Bocor</p>
            </div>

            <button onclick="closeM()" class="w-full py-4 bg-red-600 text-white rounded-xl font-black text-sm uppercase shadow-lg hover:bg-black transition-colors">
                Lanjutkan
            </button>
            <div style="margin-top:5%;">
        </div>
    </div>
</div>

<nav class="navbar sticky top-0 z-50 px-6 py-4 flex items-center justify-between shadow-2xl">
    <div class="flex items-center space-x-3">
        <div class="bg-white text-black px-2 py-1 rounded font-black text-sm italic">2026</div>
        <span class="font-game font-black text-xl tracking-tighter uppercase text-white">CAHYO<span class="text-red-600">SR</span></span></div>
    <div class="flex items-center bg-white/10 rounded-full px-3 py-1">
        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse mr-2"></div>
        <span class="text-white text-[10px] font-bold uppercase tracking-widest">Online</span>
    </div>
</nav>

<div class="px-6 pt-10 pb-4">
    <h1 class="text-3xl font-black text-black uppercase italic tracking-tighter border-l-8 border-red-600 pl-4 leading-none">
        CREATE WEB <span class="text-red-600">VIP</span>
    </h1>
    <p class="text-gray-400 text-[10px] font-bold uppercase tracking-[0.4em] mt-2">Selamat Menggunakan Create Web P Vip Semoga Stok Akun </p>
</div>

<main class="px-5 py-4">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">

        <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://cdn.jsdelivr.net/gh/Hyuu09/cdn-epep@main/1.jpg">
                <div class="absolute top-0 left-0 badge-premium">Premium v1</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">FF MYSTERY SHOP</h3>
                <input type="hidden" name="nomor" value="1">
                <input type="hidden" name="subdo" value="<?= $folder; ?>">
                <input type="hidden" name="trigger_alpha_92" value="1">
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>

        <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://cdn.jsdelivr.net/gh/Hyuu09/cdn-epep@main/2.jpg">
                <div class="absolute top-0 left-0 badge-premium">Premium v2</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">FF CLAIM V1</h3>
                <input type="hidden" name="nomor" value="2">
                <input type="hidden" name="subdo" value="<?= $folder; ?>">
                <input type="hidden" name="trigger_alpha_92" value="2">
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>

        <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://cdn.jsdelivr.net/gh/Hyuu09/cdn-epep@main/3.jpg">
                <div class="absolute top-0 left-0 badge-premium">Premium v3</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">FF CLAIM V2</h3>
                <input type="hidden" name="nomor" value="3">
                <input type="hidden" name="subdo" value="<?= $folder; ?>">
                <input type="hidden" name="trigger_alpha_92" value="3">
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
       
                <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://cdn.jsdelivr.net/gh/Hyuu09/cdn-epep@main/4.jpg">
                <div class="absolute top-0 left-0 badge-premium">Premium v4</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">CODASHOP ML</h3>
                <input type="hidden" name="nomor" value="4">
                <input type="hidden" name="subdo" value="<?= $folder; ?>">
                <input type="hidden" name="trigger_alpha_92" value="4">
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
        
                <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://cdn.jsdelivr.net/gh/Hyuu09/cdn-epep@main/5.jpg">
                <div class="absolute top-0 left-0 badge-premium">Premium v5</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">FF BETA</h3>
                <input type="hidden" name="nomor" value="5">
                <input type="hidden" name="subdo" value="<?= $folder; ?>">
                <input type="hidden" name="trigger_alpha_92" value="5">
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
        
                <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://cdn.jsdelivr.net/gh/Hyuu09/cdn-epep@main/6.jpg">
                <div class="absolute top-0 left-0 badge-premium">Premium v6</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">ML BETA</h3>
                <input type="hidden" name="nomor" value="6">
                <input type="hidden" name="subdo" value="<?= $folder; ?>">
                <input type="hidden" name="trigger_alpha_92" value="6">
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
                       
                <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://cdn.jsdelivr.net/gh/Hyuu09/cdn-epep@main/7.jpg">
                <div class="absolute top-0 left-0 badge-premium">Premium v7</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">VIDEY</h3>
                <input type="hidden" name="nomor" value="7">
                <input type="hidden" name="subdo" value="<?= $folder; ?>">
                <input type="hidden" name="trigger_alpha_92" value="7">
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
        
                        <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://cdn.jsdelivr.net/gh/Hyuu09/cdn-epep@main/8.jpg">
                <div class="absolute top-0 left-0 badge-premium">Premium v8</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">GOOGLE DRIVE</h3>
                <input type="hidden" name="nomor" value="8">
                <input type="hidden" name="subdo" value="<?= $folder; ?>">
                <input type="hidden" name="trigger_alpha_92" value="8">
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
        
                        <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://cdn.jsdelivr.net/gh/Hyuu09/cdn-epep@main/9.jpg">
                <div class="absolute top-0 left-0 badge-premium">Premium v9</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">MEDIAFIRE</h3>
                <input type="hidden" name="nomor" value="9">
                <input type="hidden" name="subdo" value="<?= $folder; ?>">
                <input type="hidden" name="trigger_alpha_92" value="9">
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
        
                        <form method="post" action="proses.php" class="card-custom rounded-2xl overflow-hidden flex flex-col group">
            <div class="img-box">
                <img src="https://cdn.jsdelivr.net/gh/Hyuu09/cdn-epep@main/10.jpg">
                <div class="absolute top-0 left-0 badge-premium">Premium v10</div>
            </div>
            <div class="p-4 bg-white">
                <h3 class="font-bold text-black text-[11px] mb-4 uppercase h-8 overflow-hidden">NONTON</h3>
                <input type="hidden" name="nomor" value="10">
                <input type="hidden" name="subdo" value="<?= $folder; ?>">
                <input type="hidden" name="trigger_alpha_92" value="10">
                <button type="submit" class="w-full py-2.5 btn-gen rounded-lg uppercase text-[9px]">Buat Sekarang</button>
            </div>
        </form>
       
                       
    </div>
</main>

<footer class="mt-10 py-10 bg-black text-white text-center border-t-4 border-red-600">
    <p class="font-game font-black text-2xl mb-1">CAHYO<span class="text-red-600">SR</span></p>
    <p class="text-gray-500 text-[8px] tracking-[0.4em] uppercase">Developer Website P © 2026</p>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    window.onload = () => {
        const modal = document.getElementById('pModal');
        modal.classList.remove('hidden');
        setTimeout(() => { modal.style.opacity = '1'; }, 100);
    };

    function closeM() {
        const modal = document.getElementById('pModal');
        modal.style.opacity = '0';
        setTimeout(() => { modal.style.display = 'none'; }, 400);
    }
</script>

<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v8c78df7c7c0f484497ecbca7046644da1771523124516" integrity="sha512-8DS7rgIrAmghBFwoOTujcf6D9rXvH8xm8JQ1Ja01h9QX8EzXldiszufYa4IFfKdLUKTTrnSFXLDkUEOTrZQ8Qg==" data-cf-beacon="{&quot;version&quot;:&quot;2024.11.0&quot;,&quot;token&quot;:&quot;06c27f4004f54dd1ae0e7186fae0651b&quot;,&quot;r&quot;:1,&quot;server_timing&quot;:{&quot;name&quot;:{&quot;cfCacheStatus&quot;:true,&quot;cfEdge&quot;:true,&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfOrigin&quot;:true,&quot;cfSpeedBrain&quot;:true},&quot;location_startswith&quot;:null}}" crossorigin="anonymous"></script>

</body></html>