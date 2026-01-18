<nav class="fixed top-0 w-full bg-white/95 backdrop-blur-sm shadow-lg z-50 border-b">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center space-x-3">
                <div class="relative w-16 h-12">
                    <img alt="Radar Mandiri Sukses Logo" class="w-full h-full object-contain" src="<?= base_url('assets/images/logo.webp') ?>"/>
                </div>
            <div>
            <h1 class="text-xl font-bold text-gray-800">RADAR MANDIRI SUKSES</h1>
            <p class="text-xs text-gray-600">Your Satisfaction is Our Proud</p>
        </div>
    </div>
    <!-- Desktop Navigation -->
    <div class="hidden md:flex items-center space-x-8">
        <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/">Home</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/about">About</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/maritime-services">Maritime Services</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/marine-outfitting">Marine Outfitting</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/services">Services</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/customer-and-partner">Customer &amp; Partner</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/documentation">Documentation</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/contact">Contact</a>
            <a class="bg-gradient-to-r from-red-600 to-blue-800 hover:from-red-700 hover:to-blue-700 text-white px-4 py-2 rounded-lg transition-all duration-300 flex items-center" href="https://wa.me/6281364588546" target="_blank">
                <!--<svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-4 w-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-icon lucide-phone"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>-->
                <svg class="mr-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                  <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                </svg>
                WhatsApp
            </a>
    </div>
    <!-- Mobile Menu Button -->
    <button class="md:hidden" onclick="toggleMobileMenu()" aria-label="Menu Button">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 lucide lucide-menu-icon lucide-menu"><path d="M4 5h16"/><path d="M4 12h16"/><path d="M4 19h16"/></svg>
    </button>
    </div>
    <!-- Mobile Navigation -->
    <div class="md:hidden py-4 border-t hidden" id="mobile-menu">
        <div class="flex flex-col space-y-4">
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/">Home</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/about">About</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/maritime-services">Maritime Services</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/marine-outfitting">Marine Outfitting</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/services">Services</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/customer-and-partner">Customer &amp; Partner</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/documentation">Documentation</a>
            <a class="text-gray-700 hover:text-red-600 transition-colors font-medium text-sm" href="/contact">Contact</a>
            <a class="bg-gradient-to-r from-red-600 to-blue-800 hover:from-red-700 hover:to-blue-700 text-white px-4 py-2 rounded-lg transition-all duration-300 flex items-center w-full" href="https://wa.me/6281364588546" target="_blank">
                <!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-4 w-4 lucide lucide-phone-icon lucide-phone"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>-->
                <svg class="mr-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                  <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                </svg>
                WhatsApp
            </a>
        </div>
    </div>
    </div>
</nav>