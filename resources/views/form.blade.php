<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body { font-family: 'Instrument Sans', sans-serif; background: #f8fafc; }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md p-8 bg-white rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-gray-100">
        <div class="mb-10 text-center">
            <div class="inline-flex items-center justify-center w-12 h-12 mb-4 bg-black text-white rounded-2xl shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Contacto</h2>
            <p class="text-gray-500 text-sm mt-1">Escríbenos tu mensaje aquí debajo.</p>
        </div>

        <div class="space-y-5">
            <div>
                <label class="block text-[13px] font-semibold text-gray-400 uppercase tracking-widest mb-2 ml-1">Email</label>
                <input type="email" placeholder="nombre@ejemplo.com" 
                    class="w-full px-5 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-black transition-all outline-none text-gray-900 placeholder:text-gray-300">
            </div>

            <div>
                <label class="block text-[13px] font-semibold text-gray-400 uppercase tracking-widest mb-2 ml-1">Mensaje</label>
                <textarea rows="4" placeholder="¿En qué podemos ayudarte?" 
                    class="w-full px-5 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-black transition-all outline-none text-gray-900 placeholder:text-gray-300 resize-none"></textarea>
            </div>

            <button class="w-full bg-black hover:bg-gray-800 text-white font-semibold py-4 rounded-2xl transition-all active:scale-[0.98] shadow-xl shadow-gray-200 flex items-center justify-center gap-2 mt-4">
                <span>Enviar ahora</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-50" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                </svg>
            </button>
        </div>
    </div>

</body>
</html>