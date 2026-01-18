<?= $this->extend('frontend/layout_public') ?>

<?= $this->section('content') ?>

<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-slate-50 relative overflow-hidden mt-10" id="maritime-services">
	<div class="absolute inset-0">
		<div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_30%,rgba(30,58,138,0.1),transparent_50%)]"></div>
		<div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(circle_at_80%_70%,rgba(15,118,110,0.1),transparent_50%)]"></div>
	</div>
	<div class="container mx-auto px-4 relative">
		<div class="text-center mb-16 fade-in">
			<span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Maritime Excellence</span>
			<h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800 mt-4"> Specialized <span class="bg-gradient-to-r from-blue-600 to-emerald-600 bg-clip-text text-transparent">Maritime Services</span>
			</h2>
			<p class="text-xl text-gray-600 max-w-3xl mx-auto"> Our core maritime expertise and specialized services </p>
		</div>
		<div class="space-y-16">
			<!-- Ship Management -->
			<div class="bg-white/80 backdrop-blur-sm border-0 shadow-2xl hover:shadow-3xl transition-all duration-500 overflow-hidden rounded-lg slide-in-left delay-300" id="ship-management">
				<div class="grid lg:grid-cols-2 gap-0">
					<div class="relative h-80 lg:h-auto">
						<img alt="Ship Management" class="w-full h-full object-cover" loading="lazy" src="<?= base_url('assets/images/maritime/management.jpg') ?>" />
						<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
						<div class="absolute bottom-6 left-6">
							<div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-600 flex items-center justify-center text-white shadow-lg">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 lucide lucide-anchor-icon lucide-anchor"><path d="M12 22V8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/><circle cx="12" cy="5" r="3"/></svg>
							</div>
						</div>
					</div>
					<div class="p-8 lg:p-12">
						<h3 class="text-3xl font-bold text-gray-800 mb-4">Ship Management</h3>
						<p class="text-lg text-gray-600 leading-relaxed mb-6"> Comprehensive marine management and support services for a wide range of vessel types, from conventional tonnage to sophisticated offshore service vessels. </p>
						<p class="text-gray-700 leading-relaxed text-sm mb-6"> Radar Mandiri Sukses (RMS) provides comprehensive marine management and support services for a wide range of vessel types, from conventional tonnage to sophisticated offshore service vessels. Our core expertise lies in Offshore, Tankers, Dry &amp; Cargo, as well as Cruise &amp; Ferry, while we continue to expand with a dedicated division for the Renewable Energy sector. </p>
						<div class="mb-8">
							<h4 class="font-semibold text-gray-800 mb-4 flex items-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-green-600 mr-2 lucide lucide-circle-check-big-icon lucide-circle-check-big"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
								Key Services
							</h4>
							<div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Offshore Vessels</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Tankers Management</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Dry &amp; Cargo Ships</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Cruise &amp; Ferry</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Renewable Energy Sector</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Ship Broker -->
			<div class="bg-white/80 backdrop-blur-sm border-0 shadow-2xl hover:shadow-3xl transition-all duration-500 overflow-hidden rounded-lg slide-in-right delay-500" id="ship-broker">
				<div class="grid lg:grid-cols-2 gap-0 lg:grid-flow-col-dense">
					<div class="p-8 lg:p-12 lg:col-start-1">
						<h3 class="text-3xl font-bold text-gray-800 mb-4">Ship Broker</h3>
						<p class="text-lg text-gray-600 leading-relaxed mb-6"> Professional ship brokerage services acting as the reliable link between cargo owners and ship operators for seamless shipping solutions. </p>
						<p class="text-gray-700 leading-relaxed text-sm mb-6"> At RMS, we provide more than just services—we deliver trusted partnerships. Acting as a reliable shipbroker, we serve as the link between cargo owners and ship operators, ensuring seamless, cost-effective, and transparent shipping solutions. </p>
						<div class="mb-8">
							<h4 class="font-semibold text-gray-800 mb-4 flex items-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-green-600 mr-2 lucide lucide-circle-check-big-icon lucide-circle-check-big"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
								Key Services
							</h4>
							<div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Chartering Services</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Sales &amp; Purchase</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Risk Assessment</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Contract Negotiation</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Compliance Oversight</span>
								</div>
							</div>
						</div>
					</div>
					<div class="relative h-80 lg:h-auto lg:col-start-2">
						<img alt="Ship Broker" class="w-full h-full object-cover" loading="lazy" src="<?= base_url('assets/images/maritime/broker.jpg') ?>" />
						<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
						<div class="absolute bottom-6 left-6">
							<div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-emerald-500 to-green-600 flex items-center justify-center text-white shadow-lg">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 lucide lucide-hand-coins-icon lucide-hand-coins"><path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17"/><path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9"/><path d="m2 16 6 6"/><circle cx="16" cy="9" r="2.9"/><circle cx="6" cy="5" r="3"/></svg>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Ship to Scrap Buy & Sale -->
			<div class="bg-white/80 backdrop-blur-sm border-0 shadow-2xl hover:shadow-3xl transition-all duration-500 overflow-hidden rounded-lg slide-in-left delay-700" id="ship-scrap">
				<div class="grid lg:grid-cols-2 gap-0">
					<div class="relative h-80 lg:h-auto">
						<img alt="Ship to Scrap Buy &amp; Sale" class="w-full h-full object-cover" loading="lazy" src="<?= base_url('assets/images/maritime/scrap.jpg') ?>" />
						<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
						<div class="absolute bottom-6 left-6">
							<div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-slate-500 to-gray-600 flex items-center justify-center text-white shadow-lg">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 lucide lucide-ship-icon lucide-ship"><path d="M12 10.189V14"/><path d="M12 2v3"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76"/><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>
							</div>
						</div>
					</div>
					<div class="p-8 lg:p-12">
						<h3 class="text-3xl font-bold text-gray-800 mb-4">Ship to Scrap Buy &amp; Sale</h3>
						<p class="text-lg text-gray-600 leading-relaxed mb-6"> Specialized services for purchasing and selling ships destined for environmentally responsible scrapping and recycling operations. </p>
						<p class="text-gray-700 leading-relaxed text-sm mb-6"> Our Ship to Scrap Buy &amp; Sale division specializes in the acquisition and disposal of vessels that have reached the end of their operational life. We provide comprehensive services including vessel valuation, documentation, environmental compliance, and coordination with certified recycling facilities. </p>
						<div class="mb-8">
							<h4 class="font-semibold text-gray-800 mb-4 flex items-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-green-600 mr-2 lucide lucide-circle-check-big-icon lucide-circle-check-big"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
								Key Services
							</h4>
							<div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Vessel Valuation</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Environmental Compliance</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Certified Recycling</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Documentation Support</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Material Recovery</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Offshore Rope Access Technician -->
			<div class="bg-white/80 backdrop-blur-sm border-0 shadow-2xl hover:shadow-3xl transition-all duration-500 overflow-hidden rounded-lg slide-in-right delay-500" id="rope-access">
				<div class="grid lg:grid-cols-2 gap-0 lg:grid-flow-col-dense">
					<div class="p-8 lg:p-12 lg:col-start-1">
						<h3 class="text-3xl font-bold text-gray-800 mb-4">Offshore Rope Access Technician</h3>
						<p class="text-lg text-gray-600 leading-relaxed mb-6"> Specialized services in high-risk environments using rope access methods for inspection, maintenance, and repair at offshore and onshore facilities. </p>
						<p class="text-gray-700 leading-relaxed text-sm mb-6"> Our Offshore Rope Access Technician division consists of IRATA-certified professionals trained to safely perform operations in hard-to-reach locations. We deliver cost-effective and efficient solutions while ensuring strict compliance with international safety standards. From oil rigs, FPSOs, and offshore platforms to shipyards and industrial plants, our team guarantees precision, safety, and reliability. </p>
						<div class="mb-8">
							<h4 class="font-semibold text-gray-800 mb-4 flex items-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-green-600 mr-2 lucide lucide-circle-check-big-icon lucide-circle-check-big"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>
								Key Services
							</h4>
							<div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Structural Inspection &amp; Maintenance</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Blasting &amp; Painting (IRATA Certified)</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">NDT &amp; E&I Support</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Lifting &amp; Rigging Assistance</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Pipeline &amp; Piping Repair</span>
								</div>
								<div class="flex items-center space-x-2">
									<div class="w-2 h-2 bg-blue-600 rounded-full"></div>
									<span class="text-sm text-gray-700">Environmental &amp; Safety Compliance</span>
								</div>
							</div>
						</div>
					</div>
					<div class="relative h-80 lg:h-auto lg:col-start-2">
						<img alt="Ship Broker" class="w-full h-full object-cover" loading="lazy" src="<?= base_url('assets/images/maritime/rope2.jpg') ?>" />
						<div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
						<div class="absolute bottom-6 left-6">
							<div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-orange-500 to-red-600 flex items-center justify-center text-white shadow-lg">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 lucide lucide-link2-icon lucide-link-2"><path d="M9 17H7A5 5 0 0 1 7 7h2"/><path d="M15 7h2a5 5 0 1 1 0 10h-2"/><line x1="8" x2="16" y1="12" y2="12"/></svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>