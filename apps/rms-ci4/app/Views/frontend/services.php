<?= $this->extend('frontend/layout_public') ?>

<?= $this->section('content') ?>

<section class="py-20 bg-white relative overflow-hidden mt-10" id="services">
	<!-- Background Elements -->
	<div class="absolute inset-0 opacity-5">
		<div class="absolute top-20 right-20 w-64 h-64 bg-blue-500 rounded-full blur-3xl"></div>
		<div class="absolute bottom-20 left-20 w-64 h-64 bg-red-500 rounded-full blur-3xl"></div>
	</div>
	<div class="container mx-auto px-4 relative">
		<div class="text-center mb-16 fade-in">
			<span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">Our Services</span>
			<h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6 mt-4"> Professional <span class="bg-gradient-to-r from-red-600 to-blue-600 bg-clip-text text-transparent">Service Portfolio</span>
			</h2>
			<p class="text-xl text-gray-600 max-w-3xl mx-auto"> Comprehensive industrial and marine services delivered by our skilled and qualified team </p>
		</div>
		<!-- Main Services -->
		<div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-4">
			<!-- Service items -->
			<!-- Ship Management -->
			<a href="/maritime-services#ship-management" class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-150 block">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-anchor-icon lucide-anchor"><path d="M12 22V8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/><circle cx="12" cy="5" r="3"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Ship Management</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Comprehensive ship management services including operations, maintenance, and crew management.</p>
				</div>
			</a>
			<!-- Ship Broker -->
			<a href="/maritime-services#ship-broker" class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-200 block">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-emerald-500 to-green-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-hand-coins-icon lucide-hand-coins"><path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17"/><path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"/><path d="m2 16 6 6"/><circle cx="16" cy="9" r="2.9"/><circle cx="6" cy="5" r="3"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Ship Broker</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Professional ship brokerage services for buying, selling, and chartering vessels worldwide.</p>
				</div>
			</a>
			<!-- Ship to Scrap Buy & Sale -->
			<a href="/maritime-services#ship-scrap" class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-250 block">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-slate-500 to-gray-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-ship-icon lucide-ship"><path d="M12 10.189V14"/><path d="M12 2v3"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76"/><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Ship to Scrap Buy &amp; Sale</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Specialized services for purchasing and selling ships destined for scrapping and recycling.</p>
				</div>
			</a>
			<!-- Offshore Rope Access Technician -->
			<a href="/maritime-services#rope-access" class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-300 block">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-cyan-500 to-cyan-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-link2-icon lucide-link-2"><path d="M9 17H7A5 5 0 0 1 7 7h2"/><path d="M15 7h2a5 5 0 1 1 0 10h-2"/><line x1="8" x2="16" y1="12" y2="12"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Offshore Rope Access Technician</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Certified offshore rope access technicians for high-altitude and marine operations.</p>
				</div>
			</a>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-300">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-users-icon lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Human Resources Outsourcing</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Professional HR outsourcing services with skilled and qualified personnel for various industries.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-350">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-building-icon lucide-building"><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M12 6h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M16 6h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/><path d="M8 6h.01"/><path d="M9 22v-3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"/><rect x="4" y="2" width="16" height="20" rx="2"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">General Contractor</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Comprehensive general contracting services for construction and industrial projects.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-400">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-red-500 to-red-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-ship-icon lucide-ship"><path d="M12 10.189V14"/><path d="M12 2v3"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76"/><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Ship New-Building, Conversion &amp; Repair</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Complete shipbuilding, conversion, and repair services with maritime expertise.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-400">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-purple-500 to-purple-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-wrench-icon lucide-wrench"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.106-3.105c.32-.322.863-.22.983.218a6 6 0 0 1-8.259 7.057l-7.91 7.91a1 1 0 0 1-2.999-3l7.91-7.91a6 6 0 0 1 7.057-8.259c.438.12.54.662.219.984z"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Piping &amp; Structure Fabrication/Installation</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Professional piping systems and structural fabrication with precision installation.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-500">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-orange-500 to-orange-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-paintbrush-icon lucide-paintbrush"><path d="m14.622 17.897-10.68-2.913"/><path d="M18.376 2.622a1 1 0 1 1 3.002 3.002L17.36 9.643a.5.5 0 0 0 0 .707l.944.944a2.41 2.41 0 0 1 0 3.408l-.944.944a.5.5 0 0 1-.707 0L8.354 7.348a.5.5 0 0 1 0-.707l.944-.944a2.41 2.41 0 0 1 3.408 0l.944.944a.5.5 0 0 0 .707 0z"/><path d="M9 8c-1.804 2.71-3.97 3.46-6.583 3.948a.507.507 0 0 0-.302.819l7.32 8.883a1 1 0 0 0 1.185.204C12.735 20.405 16 16.792 16 15"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Blasting &amp; Painting</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Industrial blasting and painting services for marine and industrial applications.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-550">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-teal-500 to-teal-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-settings-icon lucide-settings"><path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915"/><circle cx="12" cy="12" r="3"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Flange Management System / Bolting &amp; Leaking Test</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Specialized flange management with comprehensive bolting and leak testing services.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-600">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-indigo-500 to-indigo-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-cog-icon lucide-cog"><path d="M11 10.27 7 3.34"/><path d="m11 13.73-4 6.93"/><path d="M12 22v-2"/><path d="M12 2v2"/><path d="M14 12h8"/><path d="m17 20.66-1-1.73"/><path d="m17 3.34-1 1.73"/><path d="M2 12h2"/><path d="m20.66 17-1.73-1"/><path d="m20.66 7-1.73 1"/><path d="m3.34 17 1.73-1"/><path d="m3.34 7 1.73 1"/><circle cx="12" cy="12" r="2"/><circle cx="12" cy="12" r="8"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Engineering Specialist &amp; Inspection Services</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Expert engineering consultation and thorough inspection services for industrial projects.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-700">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-yellow-500 to-yellow-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-zap-icon lucide-zap"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Electrical Installation</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Professional electrical installation services for marine and industrial facilities.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-750">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-droplets-icon lucide-droplets"><path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"/><path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Tank Cleaning</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Specialized tank cleaning services for various industrial and marine applications.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-800">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-green-500 to-teal-500 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-package-icon lucide-package"><path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"/><path d="M12 22V12"/><polyline points="3.29 7 12 12 20.71 7"/><path d="m7.5 4.27 9 5.15"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">General Supplier &amp; Trading</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Comprehensive supply chain solutions and trading services for industrial needs.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-850">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-red-500 to-pink-500 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-cog-icon lucide-cog"><path d="M11 10.27 7 3.34"/><path d="m11 13.73-4 6.93"/><path d="M12 22v-2"/><path d="M12 2v2"/><path d="M14 12h8"/><path d="m17 20.66-1-1.73"/><path d="m17 3.34-1 1.73"/><path d="M2 12h2"/><path d="m20.66 17-1.73-1"/><path d="m20.66 7-1.73 1"/><path d="m3.34 17 1.73-1"/><path d="m3.34 7 1.73 1"/><circle cx="12" cy="12" r="2"/><circle cx="12" cy="12" r="8"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Mechanical Assembly Services</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Expert mechanical assembly services for complex industrial and marine equipment.</p>
				</div>
			</div>
			<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg slide-in-bottom delay-900">
				<div class="text-center p-6">
					<div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-r from-purple-500 to-indigo-500 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-recycle-icon lucide-recycle"><path d="M7 19H4.815a1.83 1.83 0 0 1-1.57-.881 1.785 1.785 0 0 1-.004-1.784L7.196 9.5"/><path d="M11 19h8.203a1.83 1.83 0 0 0 1.556-.89 1.784 1.784 0 0 0 0-1.775l-1.226-2.12"/><path d="m14 16-3 3 3 3"/><path d="M8.293 13.596 7.196 9.5 3.1 10.598"/><path d="m9.344 5.811 1.093-1.892A1.83 1.83 0 0 1 11.985 3a1.784 1.784 0 0 1 1.546.888l3.943 6.843"/><path d="m13.378 9.633 4.096 1.098 1.097-4.096"/></svg>
					</div>
					<h3 class="text-lg font-bold mb-2 group-hover:text-blue-600 transition-colors leading-tight">Ship Recycling, Demolition or Scrapping</h3>
					<p class="text-gray-600 text-sm leading-relaxed">Environmentally responsible ship recycling and demolition services with material recovery.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>