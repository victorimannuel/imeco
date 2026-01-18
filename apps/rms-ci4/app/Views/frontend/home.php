<?= $this->extend('frontend/layout_public') ?>

<?= $this->section('content') ?>

<section class="relative min-h-screen bg-gradient-to-br from-blue-50 via-red-50 to-slate-100 text-gray-800 overflow-hidden" id="home">
	<!-- Animated Background Elements -->
	<div class="absolute inset-0 pointer-events-none z-0">
		<div class="absolute top-20 left-10 w-32 h-32 bg-red-200/30 rounded-full blur-xl animate-pulse"></div>
		<div class="absolute bottom-20 right-10 w-48 h-48 bg-blue-200/30 rounded-full blur-xl animate-pulse" style="animation-delay: 1s;"></div>
		<div class="absolute top-1/2 left-1/2 w-64 h-64 bg-purple-200/20 rounded-full blur-2xl animate-pulse" style="animation-delay: 0.5s;"></div>
	</div>
	<div class="relative container mx-auto px-4 pt-24 pb-16">
		<div class="max-w-7xl mx-auto">
			<div class="grid lg:grid-cols-2 gap-12 items-center">
				<!-- Left Content -->
				<div class="space-y-8 slide-in-left">
					<div class="mb-6">
						<h1 class="text-4xl md:text-6xl font-bold bg-gradient-to-r from-blue-800 to-red-600 bg-clip-text text-transparent"> RADAR MANDIRI SUKSES </h1>
						<p class="text-xl md:text-2xl text-gray-600 mt-2">Your Satisfaction is Our Proud</p>
					</div>
					<p class="text-lg md:text-xl text-gray-700 leading-relaxed"> Leading the way in sustainable waste management and recycling services across Indonesia since 2024. Your trusted partner for professional scrap disposal and environmental solutions. Since 2025, we have expanded our expertise into ship management and ship brokerage services. </p>
					<div class="flex flex-wrap gap-4">
						<a 
                          href="https://wa.me/6281364588546?text=Halo%20Radar%20Mandiri%20Sukses%2C%20saya%20ingin%20mendapatkan%20penawaran%20gratis."
                          target="_blank"
                          rel="noopener noreferrer"
                          class="relative z-50 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 text-white px-8 py-3 rounded-lg flex items-center"
                          role="button"
                        >
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5 pointer-events-none">
                            <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
                          </svg>
                        
                          Get Free Quote
                        
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-5 w-5 pointer-events-none">
                            <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                          </svg>
                        </a>
						<a class="text-gray-700 border border-gray-300 hover:bg-gray-100 bg-white/80 backdrop-blur-sm px-8 py-3 rounded-lg flex items-center transition-all duration-300" href="mailto:darruss@radar-ms.com" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5 lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
							Contact Us 
						</a>
					</div>
					<!-- Quick Stats -->
					<div class="grid grid-cols-3 gap-6 pt-8">
						<div class="text-center">
							<div class="text-3xl font-bold text-red-600">24/7</div>
							<div class="text-sm text-gray-600">Support</div>
						</div>
						<div class="text-center">
							<div class="text-3xl font-bold text-blue-800">FREE</div>
							<div class="text-sm text-gray-600">Pickup</div>
						</div>
						<div class="text-center">
							<div class="text-3xl font-bold text-purple-600">SPOT</div>
							<div class="text-sm text-gray-600">Payment</div>
						</div>
					</div>
				</div>
				<!-- Right Content - Services Grid -->
				<div class="space-y-6 slide-in-right delay-300">
					<div class="bg-white/70 backdrop-blur-lg rounded-2xl p-8 border border-gray-200 shadow-lg">
						<h3 class="text-2xl font-bold mb-6 text-center text-gray-800">WE SPECIALIZE IN</h3>
						<div class="space-y-4">
							<div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100/50 transition-colors">
								<div class="text-red-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 lucide lucide-anchor-icon lucide-anchor"><path d="M12 22V8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/><circle cx="12" cy="5" r="3"/></svg>
								</div>
								<span class="text-gray-700 font-bold">Ship Management</span>
							</div>
							<div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100/50 transition-colors">
								<div class="text-red-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hand-coins-icon lucide-hand-coins"><path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17"/><path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"/><path d="m2 16 6 6"/><circle cx="16" cy="9" r="2.9"/><circle cx="6" cy="5" r="3"/></svg>
								</div>
								<span class="text-gray-700 font-bold">Ship Broker</span>
							</div>
							<div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100/50 transition-colors">
								<div class="text-red-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ship-icon lucide-ship"><path d="M12 10.189V14"/><path d="M12 2v3"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76"/><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>
								</div>
								<span class="text-gray-700 font-bold">Ship to Scrap Buy &amp; Sale</span>
							</div>
							<div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100/50 transition-colors">
								<div class="text-red-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-recycle-icon lucide-recycle"><path d="M7 19H4.815a1.83 1.83 0 0 1-1.57-.881 1.785 1.785 0 0 1-.004-1.784L7.196 9.5"/><path d="M11 19h8.203a1.83 1.83 0 0 0 1.556-.89 1.784 1.784 0 0 0 0-1.775l-1.226-2.12"/><path d="m14 16-3 3 3 3"/><path d="M8.293 13.596 7.196 9.5 3.1 10.598"/><path d="m9.344 5.811 1.093-1.892A1.83 1.83 0 0 1 11.985 3a1.784 1.784 0 0 1 1.546.888l3.943 6.843"/><path d="m13.378 9.633 4.096 1.098 1.097-4.096"/></svg>
								</div>
								<span class="text-gray-700">E-waste Recycling Services</span>
							</div>
							<div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100/50 transition-colors">
								<div class="text-red-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-icon lucide-shield"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
								</div>
								<span class="text-gray-700">Warehouse &amp; Office Dismantling</span>
							</div>
							<div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100/50 transition-colors">
								<div class="text-red-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
								</div>
								<span class="text-gray-700">Ship Demolition Services</span>
							</div>
							<div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100/50 transition-colors">
								<div class="text-red-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-recycle-icon lucide-recycle"><path d="M7 19H4.815a1.83 1.83 0 0 1-1.57-.881 1.785 1.785 0 0 1-.004-1.784L7.196 9.5"/><path d="M11 19h8.203a1.83 1.83 0 0 0 1.556-.89 1.784 1.784 0 0 0 0-1.775l-1.226-2.12"/><path d="m14 16-3 3 3 3"/><path d="M8.293 13.596 7.196 9.5 3.1 10.598"/><path d="m9.344 5.811 1.093-1.892A1.83 1.83 0 0 1 11.985 3a1.784 1.784 0 0 1 1.546.888l3.943 6.843"/><path d="m13.378 9.633 4.096 1.098 1.097-4.096"/></svg>
								</div>
								<span class="text-gray-700">Engineering Machinery Scrap</span>
							</div>
							<div class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-100/50 transition-colors">
								<div class="text-red-600">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-icon lucide-shield"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
								</div>
								<span class="text-gray-700">All Kinds of Cable Wires</span>
							</div>
						</div>
					</div>
					<div class="bg-gradient-to-r from-red-100/50 to-blue-100/50 backdrop-blur-lg rounded-2xl p-8 border border-gray-200 shadow-lg">
						<h3 class="text-2xl font-bold mb-6 text-center text-gray-800">OUR EXPERT TEAM</h3>
						<div class="grid grid-cols-2 gap-4 text-sm">
							<div class="flex items-center space-x-2">
								<div class="w-2 h-2 bg-red-600 rounded-full"></div>
								<span class="text-gray-700">Experienced Scrap Valuers</span>
							</div>
							<div class="flex items-center space-x-2">
								<div class="w-2 h-2 bg-red-600 rounded-full"></div>
								<span class="text-gray-700">Market Intelligence</span>
							</div>
							<div class="flex items-center space-x-2">
								<div class="w-2 h-2 bg-red-600 rounded-full"></div>
								<span class="text-gray-700">Finance &amp; Accounts</span>
							</div>
							<div class="flex items-center space-x-2">
								<div class="w-2 h-2 bg-red-600 rounded-full"></div>
								<span class="text-gray-700">Legal &amp; Compliance Team</span>
							</div>
							<div class="flex items-center space-x-2">
								<div class="w-2 h-2 bg-red-600 rounded-full"></div>
								<span class="text-gray-700">Corporate Lead Channels</span>
							</div>
							<div class="flex items-center space-x-2">
								<div class="w-2 h-2 bg-red-600 rounded-full"></div>
								<span class="text-gray-700">24/7 On-Call Facility</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="absolute inset-0 pointer-events-none z-0">
		<div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_30%_20%,rgba(30,58,138,0.1),transparent_50%)]"></div>
		<div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(circle_at_70%_80%,rgba(178,34,34,0.1),transparent_50%)]"></div>
	</div>
	<div class="container mx-auto px-4 relative">
		<div class="text-center mb-16 fade-in">
			<h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800 mt-4"> Why <span class="bg-gradient-to-r from-red-600 to-blue-600 bg-clip-text text-transparent">Radar Mandiri Sukses</span>? </h2>
			<p class="text-xl text-gray-600 max-w-3xl mx-auto"> Experience the difference with Indonesia's most trusted scrap management partner </p>
		</div>
		<!-- Stats Section -->
		<div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16 fade-in delay-300">
			<div class="bg-white/80 backdrop-blur-sm border border-gray-200 text-center hover:bg-white transition-all duration-300 hover:scale-105 shadow-lg rounded-lg p-6">
				<div class="text-red-600 mb-3 flex justify-center">
					<!--<i class="h-6 w-6" data-lucide="award"></i>-->
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award-icon lucide-award"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>
				</div>
				<div class="text-3xl font-bold mb-2 text-gray-800">2024</div>
				<div class="text-sm text-gray-600">Established</div>
			</div>
			<div class="bg-white/80 backdrop-blur-sm border border-gray-200 text-center hover:bg-white transition-all duration-300 hover:scale-105 shadow-lg rounded-lg p-6">
				<div class="text-red-600 mb-3 flex justify-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
				</div>
				<div class="text-3xl font-bold mb-2 text-gray-800">24/7</div>
				<div class="text-sm text-gray-600">Support</div>
			</div>
			<div class="bg-white/80 backdrop-blur-sm border border-gray-200 text-center hover:bg-white transition-all duration-300 hover:scale-105 shadow-lg rounded-lg p-6">
				<div class="text-red-600 mb-3 flex justify-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
				</div>
				<div class="text-3xl font-bold mb-2 text-gray-800">100%</div>
				<div class="text-sm text-gray-600">Satisfaction</div>
			</div>
			<div class="bg-white/80 backdrop-blur-sm border border-gray-200 text-center hover:bg-white transition-all duration-300 hover:scale-105 shadow-lg rounded-lg p-6">
				<div class="text-red-600 mb-3 flex justify-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target-icon lucide-target"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
				</div>
				<div class="text-3xl font-bold mb-2 text-gray-800">FREE</div>
				<div class="text-sm text-gray-600">Pickup</div>
			</div>
		</div>
		<!-- Main Reasons -->
		<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
			<div class="group bg-white/80 backdrop-blur-sm border border-gray-200 hover:bg-white transition-all duration-500 hover:-translate-y-2 shadow-lg hover:shadow-xl rounded-lg slide-in-bottom delay-500">
				<div class="text-center p-8">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-target-icon lucide-target"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
					</div>
					<h4 class="text-lg font-bold mb-4 text-gray-800 group-hover:text-blue-600 transition-colors">On-Site Assessment</h4>
					<p class="text-gray-600 leading-relaxed">Professional scrap evaluation directly at your location by our expert team</p>
				</div>
			</div>
			<div class="group bg-white/80 backdrop-blur-sm border border-gray-200 hover:bg-white transition-all duration-500 hover:-translate-y-2 shadow-lg hover:shadow-xl rounded-lg slide-in-bottom delay-600">
				<div class="text-center p-8">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-trending-up-icon lucide-trending-up"><path d="M16 7h6v6"/><path d="m22 7-8.5 8.5-5-5L2 17"/></svg>
					</div>
					<h4 class="text-lg font-bold mb-4 text-gray-800 group-hover:text-blue-600 transition-colors">Efficient Process</h4>
					<p class="text-gray-600 leading-relaxed">Streamlined operations designed for maximum efficiency and minimal disruption</p>
				</div>
			</div>
			<div class="group bg-white/80 backdrop-blur-sm border border-gray-200 hover:bg-white transition-all duration-500 hover:-translate-y-2 shadow-lg hover:shadow-xl rounded-lg slide-in-bottom delay-700">
				<div class="text-center p-8">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-orange-500 to-orange-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
					</div>
					<h4 class="text-lg font-bold mb-4 text-gray-800 group-hover:text-blue-600 transition-colors">Nationwide Service</h4>
					<p class="text-gray-600 leading-relaxed">Comprehensive coverage across Indonesia with local expertise and support</p>
				</div>
			</div>
			<div class="group bg-white/80 backdrop-blur-sm border border-gray-200 hover:bg-white transition-all duration-500 hover:-translate-y-2 shadow-lg hover:shadow-xl rounded-lg slide-in-bottom delay-800">
				<div class="text-center p-8">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-purple-500 to-purple-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-phone-icon lucide-phone"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
					</div>
					<h4 class="text-lg font-bold mb-4 text-gray-800 group-hover:text-blue-600 transition-colors">Always Available</h4>
					<p class="text-gray-600 leading-relaxed">24/7 customer support - we're just one call away from serving you</p>
				</div>
			</div>
		</div>
		<!-- Goals Section -->
		<div class="bg-white/80 backdrop-blur-sm border border-gray-200 shadow-xl mb-16 rounded-lg p-12 fade-in delay-900">
			<div class="text-center mb-12">
				<h3 class="text-3xl font-bold mb-4 text-gray-800">Our Commitment to Excellence</h3>
				<p class="text-xl text-gray-600">Driving sustainable solutions through innovation and dedication</p>
			</div>
			<div class="grid md:grid-cols-2 gap-8">
				<div class="space-y-6">
					<div class="flex items-start space-x-4">
						<div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
							<span class="text-white font-bold text-sm">1</span>
						</div>
						<div>
							<h4 class="font-semibold text-gray-800 mb-2">Deliver Optimum Service</h4>
							<p class="text-gray-600">Providing exceptional service quality that exceeds client expectations</p>
						</div>
					</div>
					<div class="flex items-start space-x-4">
						<div class="w-8 h-8 bg-gradient-to-r from-red-500 to-red-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
							<span class="text-white font-bold text-sm">2</span>
						</div>
						<div>
							<h4 class="font-semibold text-gray-800 mb-2">Develop Our People</h4>
							<p class="text-gray-600">Investing in our team's skills and creating an inspiring work environment</p>
						</div>
					</div>
				</div>
				<div class="space-y-6">
					<div class="flex items-start space-x-4">
						<div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
							<span class="text-white font-bold text-sm">3</span>
						</div>
						<div>
							<h4 class="font-semibold text-gray-800 mb-2">Measure Success</h4>
							<p class="text-gray-600">Evaluating achievement through safety, quality, and customer satisfaction</p>
						</div>
					</div>
					<div class="flex items-start space-x-4">
						<div class="w-8 h-8 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
							<span class="text-white font-bold text-sm">4</span>
						</div>
						<div>
							<h4 class="font-semibold text-gray-800 mb-2">Cost-Effective Solutions</h4>
							<p class="text-gray-600">Delivering excellent services with professional results at competitive prices</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Certification Banner -->
		<div class="bg-gradient-to-r from-red-600 via-blue-600 to-purple-600 text-white border-0 shadow-2xl rounded-lg p-12 text-center fade-in delay-1000 mb-16">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-auto h-20 w-20 text-white/80 mb-6 lucide lucide-award-icon lucide-award"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>
			<h3 class="text-3xl md:text-4xl font-bold mb-6">Fully Licensed &amp; Certified Company</h3>
			<p class="text-xl text-white/90 max-w-4xl mx-auto mb-8 leading-relaxed"> Radar Mandiri Sukses is a legally registered company with all required documentation to operate waste management and recycling services in Indonesia. We are committed to conducting business with complete transparency and compliance with applicable regulations. </p>
			<div class="grid md:grid-cols-3 gap-8 mt-12">
				<div class="text-center">
					<div class="w-16 h-16 mx-auto mb-4 bg-white/20 rounded-2xl flex items-center justify-center text-white">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-circle-check-big-icon lucide-circle-check-big"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
					</div>
					<h4 class="font-semibold text-lg mb-2">Government Certified</h4>
					<p class="text-white/80 text-sm">Officially registered with Indonesian authorities</p>
				</div>
				<div class="text-center">
					<div class="w-16 h-16 mx-auto mb-4 bg-white/20 rounded-2xl flex items-center justify-center text-white">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-shield-icon lucide-shield"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/></svg>
					</div>
					<h4 class="font-semibold text-lg mb-2">Compliance Assured</h4>
					<p class="text-white/80 text-sm">Full adherence to environmental regulations</p>
				</div>
				<div class="text-center">
					<div class="w-16 h-16 mx-auto mb-4 bg-white/20 rounded-2xl flex items-center justify-center text-white">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-award-icon lucide-award"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>
					</div>
					<h4 class="font-semibold text-lg mb-2">Industry Standards</h4>
					<p class="text-white/80 text-sm">Meeting international waste management standards</p>
				</div>
			</div>
		</div>
		<!-- Scroll Indicator -->
	    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce"></div>
    </div>
</section>

<?= $this->endSection() ?>