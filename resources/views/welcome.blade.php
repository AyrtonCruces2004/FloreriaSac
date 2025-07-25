<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Florería SAC</title>
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
        @font-face {
      font-family: 'Libre Baskerville';
      font-style: italic;
      font-weight: 100;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/librebaskerville/v16/kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcWx8QDP2V.woff2) format('woff2');
      unicode-range: U+0100-02BA, U+02BD-02C5; /* truncado por brevedad */
    }

    @font-face {
      font-family: 'Libre Baskerville';
      font-style: normal;
      font-weight: 100;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/librebaskerville/v16/kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNZaxM.woff2) format('woff2');
      unicode-range: U+0000-00FF; /* truncado */
    }

    .font-libre {
      font-family: 'Libre Baskerville', serif;
    }
        .poppins-bold {
        font-family: "Poppins", sans-serif;
        font-style: normal;
        }

            /*! tailwindcss v4.0.14 | MIT License | https://tailwindcss.com */
            @layer theme{:root,:host{--font-sans:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-green-600:oklch(.627 .194 149.214);--color-gray-900:oklch(.21 .034 264.665);--color-zinc-50:oklch(.985 0 0);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-800:oklch(.268 .007 34.298);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-4xl:56rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--leading-tight:1.25;--leading-normal:1.5;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings)}}@layer base{:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;-webkit-text-decoration:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){appearance:button}::file-selector-button{appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.sr-only{clip:rect(0,0,0,0);white-space:nowrap;border-width:0;width:1px;height:1px;margin:-1px;padding:0;position:absolute;overflow:hidden}.absolute{position:absolute}.relative{position:relative}.static{position:static}.sticky{position:sticky}.inset-0{inset:calc(var(--spacing)*0)}.inset-y-\[3px\]{inset-block:3px}.start-0{inset-inline-start:calc(var(--spacing)*0)}.end-0{inset-inline-end:calc(var(--spacing)*0)}.top-0{top:calc(var(--spacing)*0)}.z-20{z-index:20}.container{width:100%}@media (width>=40rem){.container{max-width:40rem}}@media (width>=48rem){.container{max-width:48rem}}@media (width>=64rem){.container{max-width:64rem}}@media (width>=80rem){.container{max-width:80rem}}@media (width>=96rem){.container{max-width:96rem}}.mx-auto{margin-inline:auto}.my-6{margin-block:calc(var(--spacing)*6)}.-ms-8{margin-inline-start:calc(var(--spacing)-8)}.ms-1{margin-inline-start:calc(var(--spacing)1)}.ms-2{margin-inline-start:calc(var(--spacing)*2)}.ms-4{margin-inline-start:calc(var(--spacing)*4)}.me-1\.5{margin-inline-end:calc(var(--spacing)*1.5)}.me-2{margin-inline-end:calc(var(--spacing)*2)}.me-3{margin-inline-end:calc(var(--spacing)*3)}.me-5{margin-inline-end:calc(var(--spacing)*5)}.me-10{margin-inline-end:calc(var(--spacing)*10)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.mt-2{margin-top:calc(var(--spacing)*2)}.mt-4{margin-top:calc(var(--spacing)*4)}.mt-5{margin-top:calc(var(--spacing)*5)}.mt-6{margin-top:calc(var(--spacing)*6)}.mt-10{margin-top:calc(var(--spacing)*10)}.mt-auto{margin-top:auto}.-mb-px{margin-bottom:-1px}.mb-0\.5{margin-bottom:calc(var(--spacing).5)}.mb-1{margin-bottom:calc(var(--spacing)1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-5{margin-bottom:calc(var(--spacing)*5)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.mb-\[2px\]{margin-bottom:2px}.block{display:block}.contents{display:contents}.flex{display:flex}.grid{display:grid}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.aspect-square{aspect-ratio:1}.aspect-video{aspect-ratio:var(--aspect-video)}.size-3\!{width:calc(var(--spacing)*3)!important;height:calc(var(--spacing)*3)!important}.size-5{width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}.size-8{width:calc(var(--spacing)*8);height:calc(var(--spacing)*8)}.size-9{width:calc(var(--spacing)*9);height:calc(var(--spacing)*9)}.size-full{width:100%;height:100%}.\!h-10{height:calc(var(--spacing)*10)!important}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-7{height:calc(var(--spacing)*7)}.h-8{height:calc(var(--spacing)*8)}.h-9{height:calc(var(--spacing)*9)}.h-10{height:calc(var(--spacing)*10)}.h-14\.5{height:calc(var(--spacing)*14.5)}.h-dvh{height:100dvh}.h-full{height:100%}.min-h-screen{min-height:100vh}.min-h-svh{min-height:100svh}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-8{width:calc(var(--spacing)*8)}.w-9{width:calc(var(--spacing)*9)}.w-10{width:calc(var(--spacing)*10)}.w-\[220px\]{width:220px}.w-\[448px\]{width:448px}.w-full{width:100%}.w-px{width:1px}.max-w-\[335px\]{max-width:335px}.max-w-lg{max-width:var(--container-lg)}.max-w-md{max-width:var(--container-md)}.max-w-none{max-width:none}.max-w-sm{max-width:var(--container-sm)}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.cursor-pointer{cursor:pointer}.auto-rows-min{grid-auto-rows:min-content}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.items-start{align-items:flex-start}.justify-between{justify-content:space-between}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-2{gap:calc(var(--spacing)*2)}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}.gap-6{gap:calc(var(--spacing)*6)}:where(.space-y-2>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*2)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-3>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*3)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*3)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-6>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*6)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*6)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-\[2px\]>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(2px*var(--tw-space-y-reverse));margin-block-end:calc(2px*calc(1 - var(--tw-space-y-reverse)))}:where(.space-x-0\.5>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing).5)var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing).5)calc(1 - var(--tw-space-x-reverse)))}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}:where(.space-x-2>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*2)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-x-reverse)))}.self-stretch{align-self:stretch}.truncate{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-lg{border-radius:var(--radius-lg)}.rounded-md{border-radius:var(--radius-md)}.rounded-sm{border-radius:var(--radius-sm)}.rounded-xl{border-radius:var(--radius-xl)}.rounded-ee-lg{border-end-end-radius:var(--radius-lg)}.rounded-es-lg{border-end-start-radius:var(--radius-lg)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.border-b{border-bottom-style:var(--tw-border-style);border-bottom-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-neutral-200{border-color:var(--color-neutral-200)}.border-transparent{border-color:#0000}.border-zinc-200{border-color:var(--color-zinc-200)}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-neutral-100{background-color:var(--color-neutral-100)}.bg-neutral-200{background-color:var(--color-neutral-200)}.bg-neutral-900{background-color:var(--color-neutral-900)}.bg-white{background-color:var(--color-white)}.bg-zinc-50{background-color:var(--color-zinc-50)}.bg-zinc-200{background-color:var(--color-zinc-200)}.fill-current{fill:currentColor}.stroke-gray-900\/20{stroke:color-mix(in oklab,var(--color-gray-900)20%,transparent)}.p-0{padding:calc(var(--spacing)*0)}.p-6{padding:calc(var(--spacing)*6)}.p-10{padding:calc(var(--spacing)*10)}.px-1{padding-inline:calc(var(--spacing)*1)}.px-5{padding-inline:calc(var(--spacing)*5)}.px-8{padding-inline:calc(var(--spacing)*8)}.px-10{padding-inline:calc(var(--spacing)*10)}.py-0\!{padding-block:calc(var(--spacing)*0)!important}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.py-8{padding-block:calc(var(--spacing)*8)}.ps-3{padding-inline-start:calc(var(--spacing)*3)}.ps-7{padding-inline-start:calc(var(--spacing)*7)}.pe-4{padding-inline-end:calc(var(--spacing)*4)}.pb-4{padding-bottom:calc(var(--spacing)*4)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-center{text-align:center}.text-start{text-align:start}.text-lg{font-size:var(--text-lg);line-height:var(--tw-leading,var(--text-lg--line-height))}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-xs{font-size:var(--text-xs);line-height:var(--tw-leading,var(--text-xs--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-none{--tw-leading:1;line-height:1}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.leading-tight{--tw-leading:var(--leading-tight);line-height:var(--leading-tight)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.font-normal{--tw-font-weight:var(--font-weight-normal);font-weight:var(--font-weight-normal)}.font-semibold{--tw-font-weight:var(--font-weight-semibold);font-weight:var(--font-weight-semibold)}.\!text-green-600{color:var(--color-green-600)!important}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-black{color:var(--color-black)}.text-green-600{color:var(--color-green-600)}.text-stone-800{color:var(--color-stone-800)}.text-white{color:var(--color-white)}.text-zinc-400{color:var(--color-zinc-400)}.text-zinc-500{color:var(--color-zinc-500)}.text-zinc-600{color:var(--color-zinc-600)}.lowercase{text-transform:lowercase}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-xs{--tw-shadow:0 1px 2px 0 var(--tw-shadow-color,#0000000d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.outline{outline-style:var(--tw-outline-style);outline-width:1px}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.group-data-open\/disclosure-button\:block:is(:where(.group\/disclosure-button)[data-open] *){display:block}.group-data-open\/disclosure-button\:hidden:is(:where(.group\/disclosure-button)[data-open] *){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:start-\[0\.4rem\]:before{content:var(--tw-content);inset-inline-start:.4rem}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}.hover\:bg-zinc-800\/5:hover{background-color:color-mix(in oklab,var(--color-zinc-800)5%,transparent)}.hover\:text-zinc-800:hover{color:var(--color-zinc-800)}}.data-open\:block[data-open]{display:block}@media (width<64rem){.max-lg\:hidden{display:none}}@media (width<48rem){.max-md\:flex-col{flex-direction:column}.max-md\:pt-6{padding-top:calc(var(--spacing)*6)}}@media (width>=40rem){.sm\:w-\[350px\]{width:350px}.sm\:px-0{padding-inline:calc(var(--spacing)*0)}}@media (width>=48rem){.md\:hidden{display:none}.md\:w-\[220px\]{width:220px}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.md\:p-10{padding:calc(var(--spacing)*10)}}@media (width>=64rem){.lg\:-ms-px{margin-inline-start:-1px}.lg\:ms-0{margin-inline-start:calc(var(--spacing)*0)}.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:block{display:block}.lg\:flex{display:flex}.lg\:hidden{display:none}.lg\:aspect-auto{aspect-ratio:auto}.lg\:h-8{height:calc(var(--spacing)*8)}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:max-w-none{max-width:none}.lg\:grow{flex-grow:1}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-ss-lg{border-start-start-radius:var(--radius-lg)}.lg\:rounded-e-lg{border-start-end-radius:var(--radius-lg);border-end-end-radius:var(--radius-lg)}.lg\:rounded-e-lg\!{border-start-end-radius:var(--radius-lg)!important;border-end-end-radius:var(--radius-lg)!important}.lg\:rounded-ee-none{border-end-end-radius:0}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}.lg\:px-0{padding-inline:calc(var(--spacing)*0)}}:where(.rtl\:space-x-reverse:where(:dir(rtl),[dir=rtl],[dir=rtl] *)>:not(:last-child)){--tw-space-x-reverse:1}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:border-neutral-700{border-color:var(--color-neutral-700)}.dark\:border-neutral-800{border-color:var(--color-neutral-800)}.dark\:border-stone-800{border-color:var(--color-stone-800)}.dark\:border-zinc-700{border-color:var(--color-zinc-700)}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:bg-neutral-700{background-color:var(--color-neutral-700)}.dark\:bg-stone-950{background-color:var(--color-stone-950)}.dark\:bg-white\/30{background-color:color-mix(in oklab,var(--color-white)30%,transparent)}.dark\:bg-zinc-800{background-color:var(--color-zinc-800)}.dark\:bg-zinc-900{background-color:var(--color-zinc-900)}.dark\:bg-linear-to-b{--tw-gradient-position:to bottom in oklab;background-image:linear-gradient(var(--tw-gradient-stops))}.dark\:from-neutral-950{--tw-gradient-from:var(--color-neutral-950);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.dark\:to-neutral-900{--tw-gradient-to:var(--color-neutral-900);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.dark\:stroke-neutral-100\/20{stroke:color-mix(in oklab,var(--color-neutral-100)20%,transparent)}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:text-black{color:var(--color-black)}.dark\:text-white{color:var(--color-white)}.dark\:text-white\/80{color:color-mix(in oklab,var(--color-white)80%,transparent)}.dark\:text-zinc-400{color:var(--color-zinc-400)}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}.dark\:hover\:bg-white\/\[7\%\]:hover{background-color:color-mix(in oklab,var(--color-white)7%,transparent)}.dark\:hover\:text-white:hover{color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}.\[\&\>div\>svg\]\:size-5>div>svg{width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}:where(.\[\:where\(\&\)\]\:size-4){width:calc(var(--spacing)*4);height:calc(var(--spacing)*4)}:where(.\[\:where\(\&\)\]\:size-5){width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}:where(.\[\:where\(\&\)\]\:size-6){width:calc(var(--spacing)*6);height:calc(var(--spacing)*6)}}@property --tw-translate-x{syntax:"";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"";inherits:false;initial-value:0}@property --tw-space-y-reverse{syntax:"";inherits:false;initial-value:0}@property --tw-space-x-reverse{syntax:"";inherits:false;initial-value:0}@property --tw-border-style{syntax:"";inherits:false;initial-value:solid}@property --tw-leading{syntax:"";inherits:false}@property --tw-font-weight{syntax:"";inherits:false}@property --tw-shadow{syntax:"";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"";inherits:false}@property --tw-inset-shadow{syntax:"";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"";inherits:false}@property --tw-ring-color{syntax:"";inherits:false}@property --tw-ring-shadow{syntax:"";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"";inherits:false}@property --tw-inset-ring-shadow{syntax:"";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"";inherits:false;initial-value:0 0 #0000}@property --tw-outline-style{syntax:"";inherits:false;initial-value:solid}@property --tw-duration{syntax:"";inherits:false}@property --tw-content{syntax:"";inherits:false;initial-value:""}@property --tw-gradient-position{syntax:"";inherits:false}@property --tw-gradient-from{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-via{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-to{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-stops{syntax:"";inherits:false}@property --tw-gradient-via-stops{syntax:"";inherits:false}@property --tw-gradient-from-position{syntax:"<length-percentage>";inherits:false;initial-value:0%}@property --tw-gradient-via-position{syntax:"<length-percentage>";inherits:false;initial-value:50%}@property --tw-gradient-to-position{syntax:"<length-percentage>";inherits:false;initial-value:100%}

            html {
            scroll-behavior: smooth;
            }
        </style></head>

<body class="bg-white">
  <div id="scroll-container">
    <!-- HEADER -->
    <header class="bg-white shadow-md sticky top-0 z-20">
      <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <a href="{{ url('/') }}" class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-black rounded-full"></div>
            <span class="text-black font-['Libre_Baskerville'] hover:text-[#D4AF37] transition duration-450">Florería</span>
          </a>
          <nav class="flex items-center gap-16 font-normal">
            <div class="flex gap-12 text-xs">
              <a href="{{ url('/') }}" class="text-black hover:text-[#D4AF37] uppercase tracking-wide font-['Libre_Baskerville'] transition duration-450">Inicio</a>
              <a href="{{ url('/catalogo') }}" class="text-black hover:text-[#D4AF37] uppercase tracking-wide font-['Libre_Baskerville'] transition duration-450">Catálogo</a>
              <a href="{{ route('contacto') }}"
                class="text-black hover:text-[#D4AF37] uppercase tracking-wide font-['Libre_Baskerville'] transition duration-300">
                Contacto
              </a>
              <a href="{{ route('nosotros') }}" class="text-black hover:text-[#D4AF37] uppercase tracking-wide font-['Libre_Baskerville'] transition duration-450">Sobre Nosotros
              </a>
            </div>
            <div class="flex gap-10">
              <a href="{{ url('/carrito') }}" class="text-black hover:text-[#D4AF37] transition duration-450">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m5-9v9m4-9v9m4-9l2 9" />
                </svg>
              </a>
              <a href="{{ url('/perfil') }}" class="text-black hover:text-[#D4AF37] transition duration-450">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A9 9 0 1118.879 6.196 9 9 0 015.12 17.804z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </a>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <section class="bg-gray-800">
      <div class="container mx-auto px-6 py-16 lg:flex lg:items-center lg:gap-12">

        {{-- Texto --}}
        <div class="lg:w-1/2">
          <h1 class="text-white font-semibold uppercase tracking-wide font-['Libre_Baskerville']">Bienvenido a Nuestra Florería</h1>
          <p class="mt-6 text-gray-300 tracking-wide font-['Libre_Baskerville']">Elige entre una variedad de flores frescas y hermosas.</p>
          <a href="{{ url('/catalogo') }}"
            class="group relative inline-block mt-15 overflow-hidden px-6 py-3 rounded-lg bg-black text-white font-['Libre_Baskerville'] transition-all duration-500">
            <span class="absolute inset-0 w-full h-full bg-white translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-out"></span>
            <span class="relative z-10 group-hover:text-black transition-colors duration-500">Ver Catálogo</span>
          </a>

        </div>

        {{-- Slider 1 con efecto de fade --}}
        <div class="lg:w-1/2 mt-10 lg:mt-0 relative overflow-hidden px-4 md:px-0">
          <div class="relative w-full h-80 rounded-3xl overflow-hidden shadow-lg">
            <div id="fade-slider" class="relative w-full h-full">
              <img src="{{ asset('img/Flor1.png') }}" class="fade-slide absolute inset-0 w-full h-full object-cover rounded-3xl opacity-100 transition-opacity duration-1500" alt="Flor 1">
              <img src="{{ asset('img/Flor2.jpg') }}" class="fade-slide absolute inset-0 w-full h-full object-cover rounded-3xl opacity-0 transition-opacity duration-1500" alt="Flor 2">
              <img src="{{ asset('img/Flor3.jpg') }}" class="fade-slide absolute inset-0 w-full h-full object-cover rounded-3xl opacity-0 transition-opacity duration-1500" alt="Flor 3">
            </div>

            {{-- Bullets --}}
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-3 z-10">
              <button onclick="goToFadeSlide(0)" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition"></button>
              <button onclick="goToFadeSlide(1)" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition"></button>
              <button onclick="goToFadeSlide(2)" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition"></button>
            </div>
          </div>
        </div>

        <script>
          const slides1 = document.querySelectorAll('.fade-slide');
          let currentFade1 = 0;

          function showSlide1(index) {
            slides1.forEach((slide, i) => {
              slide.classList.toggle('opacity-100', i === index);
              slide.classList.toggle('opacity-0', i !== index);
            });
          }

          function goToFadeSlide(index) {
            currentFade1 = index;
            showSlide1(currentFade1);
          }

          setInterval(() => {
            currentFade1 = (currentFade1 + 1) % slides1.length;
            showSlide1(currentFade1);
          }, 5000);

          showSlide1(0);
        </script>

    </section>



    {{-- JS de Swiper --}}

    {{-- En welcome.blade.php (o donde montes el home) --}}
    <section class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-6">
        <!-- Título -->
        <h2 class="text-3xl font-bold text-center mb-12 uppercase tracking-wide font-['Libre_Baskerville']">
          Productos Destacados
        </h2>

        <!-- Grid -->
        <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
          @foreach($featured as $product)
          <a href="{{ url('/producto/' . $product['slug']) }}" class="group block shadow-md hover:shadow-xl transition rounded-2xl overflow-hidden bg-white border border-gray-200">

            <!-- Imagen con etiqueta -->
            <div class="relative h-64 w-full">
              <img
                src="{{ asset($product['image']) }}"
                alt="{{ $product['name'] }}"
                class="absolute inset-0 w-full h-full object-cover">
              @if(!empty($product['label']))
              <span class="absolute top-2 left-2 bg-white text-gray-800 text-xs font-semibold px-2 py-1 rounded z-10 shadow">
                {{ $product['label'] }}
              </span>
              @endif
            </div>

            <!-- Info del producto -->
            <div class="p-4">
              <p class="text-gray-900 font-semibold text-lg">{{ $product['name'] }}</p>
              <p class="mt-1 text-gray-600 text-sm">${{ $product['price'] }}</p>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </section>


    {{-- Inicialización de Swiper --}}
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        new Swiper('.featured-swiper', {
          loop: true,
          speed: 600,
          slidesPerView: 1,
          spaceBetween: 20,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          breakpoints: {
            640: {
              slidesPerView: 2
            },
            1024: {
              slidesPerView: 3
            },
          },
        });
      });
    </script>
  </div>
  </div>
  </section>
  <!-- Franja informativa superior -->
  <!-- Texto superior en fondo negro -->
  <div class="bg-black text-white text-center py-2">
    <span class="tracking-wide uppercase text-sm">
      Descubre la belleza de regalar flores en cada momento especial.
    </span>
  </div>

  <!-- Slider 2 con efecto de fade -->
  <section class="bg-white">
    <div class="max-w-full mx-auto">
      <div class="relative w-full max-w-full mx-auto mt-0 overflow-hidden h-[600px]">
        <div class="relative w-full h-full overflow-hidden" id="fade-carousel-2">
          <img src="{{ asset('img/flor1.png') }}" alt="Flor 1" class="fade-slide-2 absolute inset-0 w-full h-full object-cover  opacity-100 transition-opacity duration-1500">
          <img src="{{ asset('img/flor2.jpg') }}" alt="Flor 2" class="fade-slide-2 absolute inset-0 w-full h-full object-cover  opacity-0 transition-opacity duration-1500">
          <img src="{{ asset('img/flor3.jpg') }}" alt="Flor 3" class="fade-slide-2 absolute inset-0 w-full h-full object-cover  opacity-0 transition-opacity duration-1500">
        </div>

        <!-- Botones indicadores -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-3 z-10">
          <button onclick="goToFade2(0)" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition"></button>
          <button onclick="goToFade2(1)" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition"></button>
          <button onclick="goToFade2(2)" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition"></button>
        </div>
      </div>
    </div>
  </section>


  <script>
    const fadeSlides2 = document.querySelectorAll('.fade-slide-2');
    let fadeIndex2 = 0;

    function showFadeSlide2(index) {
      fadeSlides2.forEach((img, i) => {
        img.classList.toggle('opacity-100', i === index);
        img.classList.toggle('opacity-0', i !== index);
      });
    }

    function goToFade2(index) {
      fadeIndex2 = index;
      showFadeSlide2(fadeIndex2);
    }

    setInterval(() => {
      fadeIndex2 = (fadeIndex2 + 1) % fadeSlides2.length;
      showFadeSlide2(fadeIndex2);
    }, 5000);

    showFadeSlide2(0);
  </script>

  </section>
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl text-center mb-12 uppercase font-['Libre_Baskerville']">Categorías</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

        <!-- Categoría: Rosas -->
        <a href="{{ route('catalogo', ['categoria' => 'rosas']) }}" class="block text-center group cursor-pointer">
          <div class="overflow-hidden rounded-xl shadow-lg">
            <img src="{{ asset('image/Rosas/Rosa1.jpg') }}"
              alt="Rosas"
              class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-300">
          </div>
          <p class="mt-4 text-lg tracking-wide uppercase font-['Libre_Baskerville']">rosas</p>
        </a>

        <!-- Categoría: Tulipanes -->
        <a href="{{ route('catalogo', ['categoria' => 'tulipanes']) }}" class="block text-center group cursor-pointer">
          <div class="overflow-hidden rounded-xl shadow-lg">
            <img src="{{ asset('image/Tulipanes/Tuli1.jpg') }}"
              alt="Tulipanes"
              class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-300">
          </div>
          <p class="mt-4 text-lg tracking-wide uppercase font-['Libre_Baskerville']">tulipanes</p>
        </a>

        <!-- Categoría: Girasoles -->
        <a href="{{ route('catalogo', ['categoria' => 'girasoles']) }}" class="block text-center group cursor-pointer">
          <div class="overflow-hidden rounded-xl shadow-lg">
            <img src="{{ asset('image/girasoles/gira1.jpg') }}"
              alt="Girasoles"
              class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-300">
          </div>
          <p class="mt-4 text-lg tracking-wide uppercase font-['Libre_Baskerville']">girasoles</p>
        </a>

      </div>
    </div>
  </section>
  <hr class="border-t border-gray-300 my-1">
  <section class="bg-white py-20 px-6">
    <h2 class="text-2xl text-center mb-12 font-['Libre_Baskerville']">CONTACTANOS</h2>

    <form class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 font-['Libre_Baskerville']">
      <!-- Nombre -->
      <div class="flex flex-col">
        <label for="nombre" class="mb-2 text-sm  text-gray-700">NOMBRE</label>
        <input
          type="text"
          id="nombre"
          name="nombre"
          placeholder="Juan Pérez"
          required
          class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black" />
      </div>

      <!-- Email -->
      <div class="flex flex-col">
        <label for="email" class="mb-2 text-sm  text-gray-700">EMAIL</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="juan@email.com"
          required
          class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black" />
      </div>

      <!-- Mensaje -->
      <div class="flex flex-col">
        <label for="mensaje" class="mb-2 text-sm text-gray-700">MENSAJE</label>
        <input
          type="text"
          id="mensaje"
          name="mensaje"
          placeholder="Estoy interesado en un ramo de rosas..."
          required
          class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-black" />
      </div>

      <!-- Botón Enviar -->
      <div class="md:col-span-3 flex justify-center mt-6">
        <button
          class="relative overflow-hidden bg-gray text-black font-semibold px-8 py-3 rounded-md group
           border border-gray-400">
          <span
            class="absolute inset-0 bg-gray-200 translate-x-full
             group-hover:translate-x-0 transition-transform duration-500 ease-in-out"></span>
          <span class="relative z-10 group-hover:text-black transition duration-300">
            Enviar
          </span>
        </button>
      </div>


    </form>
  </section>
  <section id="Reseñas" class="pt-12 pb-20 bg-[#f9f9f9] font-['Libre_Baskerville'] overflow-visible">
    <div class="max-w-4xl mx-auto px-4 text-center mb-8">
      <h2 class="text-3xl text-gray-800 uppercase">Opiniones de Clientes</h2>
    </div>

    <div class="swiper reviews-swiper overflow-visible">
      <div class="swiper-wrapper">
        <!-- Testimonio 1 -->
        <div class="swiper-slide flex justify-center">
          <div class="testimonial-card bg-white rounded-2xl p-8 text-center">
            <div class="text-2xl mb-4">★★★★★</div>
            <p class="text-gray-700 mb-4 leading-tight ">
              Todo estuvo perfecto, la atención sin problemas y bastante rápida.
            </p>
            <p class="font-semibold text-gray-900 ">L. Gamonal</p>
            <p class="text-sm text-gray-500">Hace 1 año</p>
          </div>
        </div>
        <!-- Testimonio 2 -->
        <div class="swiper-slide flex justify-center">
          <div class="testimonial-card bg-white rounded-2xl p-8 text-center">
            <div class="text-2xl mb-4">★★★★★</div>
            <p class="text-gray-700 mb-4 leading-tight">
              Me encantan sus arreglos. Románticos y modernos con full detalles.
            </p>
            <p class="font-semibold text-gray-900">J. Prado</p>
            <p class="text-sm text-gray-500">Hace 6 meses</p>
          </div>
        </div>
        <!-- Testimonio 3 -->
        <div class="swiper-slide flex justify-center">
          <div class="testimonial-card bg-white rounded-2xl p-8 text-center">
            <div class="text-2xl mb-4">★★★★★</div>
            <p class="text-gray-700 mb-4 leading-tight">
              Muy buen servicio y arreglos de buena calidad. ¡A mi esposa le encantó!
            </p>
            <p class="font-semibold text-gray-900">J. Ravelo</p>
            <p class="text-sm text-gray-500">Hace 6 meses</p>
          </div>
        </div>
      </div>
    </div>


    <!-- bullets grises -->

    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const swiper = new Swiper('.reviews-swiper', {
        loop: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        spaceBetween: 80,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
          dynamicBullets: true
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        navigation: {
          prevEl: '.swiper-button-prev',
          nextEl: '.swiper-button-next'
        },
        breakpoints: {
          640: {
            spaceBetween: 60
          },
          1024: {
            spaceBetween: 100
          }
        },
        on: {
          init() {
            // ► Aquí elegimos manualmente qué slide original queremos ver en el centro al cargar.
            //    Si quieres que sea el Testimonio 1 (L. Gamonal) usa index 0,
            //    para el Testimonio 2 (J. Prado) index 1, etc.
            this.slideToLoop(0, 0);
          }
        }
      });
    });
  </script>


  <style>
    /* padding lateral para respirar */
    .reviews-swiper {
      padding: 0 2rem;
    }

    /* cada slide más ancho */
    .reviews-swiper .swiper-slide {
      width: 600px !important;
    }

    /* estilo base de la card */
    .testimonial-card {
      transform: scale(0.85);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
      margin-bottom: 5rem;
    }

    /* la card activa */
    .swiper-slide-active .testimonial-card {
      transform: scale(1);
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
      z-index: 10;
    }

    /* bullets grises */
    .swiper-pagination-bullet {
      width: 10px;
      height: 10px;
      background-color: #ccc !important;
      opacity: 1;
      margin: 0 6px !important;
      transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
      width: 12px;
      height: 12px;
      background-color: #888 !important;
    }

    /* opcional: estilo de flechas por si quieres personalizar */
    .swiper-button-prev,
    .swiper-button-next {
      color: #444;
      width: 2.5rem;
      height: 2.5rem;
      background: #fff;
      border-radius: 9999px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
  <hr class="border-t border-gray-300 my-20">
  <footer class="bg-white text-black font-['Libre_Baskerville'] px-6 py-12">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 text-sm">

      <!-- INFORMACIÓN -->
      <div>
        <h3 class="uppercase font-medium tracking-widest mb-4">Información</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:underline">Política de Envíos</a></li>
          <li><a href="#" class="hover:underline">Política de Privacidad</a></li>
          <li><a href="#" class="hover:underline">Política de Cambios y Devoluciones</a></li>
          <li><a href="#" class="hover:underline">Tarifario de Delivery</a></li>
          <li><a href="#" class="hover:underline">Preguntas Frecuentes</a></li>
        </ul>
        <img src="/ruta/libro-reclamaciones.png" alt="Libro de Reclamaciones" class="mt-6 w-20">
      </div>

      <!-- CONTACTO -->
      <div class="space-y-3">
        <h3 class="uppercase font-medium tracking-widest mb-4">Contacto</h3>
        <p><strong>Mail:</strong> josesaaca@gmail.com</p>
        <p><strong>Teléfono:</strong> +51 940910751</p>
        <p><strong>Dirección:</strong> Lima, Lima, Rimac</p>
        <p><strong>Horarios:</strong> Lun-Sáb 8am a 5pm / Dom 8am a 4pm</p>
      </div>

      <!-- REGÍSTRATE -->
      <div>
        <h3 class="uppercase font-medium tracking-widest mb-4">Regístrate</h3>
        <p class="mb-2">Recibe novedades, ofertas especiales, e increíbles sorteos.</p>
        <div class="flex items-center border-b border-black py-2">
          <input type="email" placeholder="Suscríbete a nuestra lista de correo" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none">
          <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m-4 4l4 4" />
          </svg>
        </div>
        <label class="flex items-center mt-3 text-xs">
          <input type="checkbox" class="mr-2">
          Acepto la <a href="#" class="underline ml-1">Política de Privacidad</a>
        </label>

        <div class="flex space-x-4 mt-6">
          <a href="#" class="text-xl"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-xl"><i class="fab fa-facebook"></i></a>
        </div>
      </div>
    </div>

    <div class="text-center mt-12 text-xs">
      © 2025 Jose Ayrton Calderon Cruces Todos los derechos reservados. Uwu
    </div>
  </footer>
  </div>
</body>

</html>

</html>