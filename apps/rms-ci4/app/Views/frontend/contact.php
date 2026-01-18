<?= $this->extend('frontend/layout_public') ?>

<?= $this->section('content') ?>

<section class="py-20 bg-gradient-to-br from-red-50 via-white to-blue-50 text-gray-800 relative overflow-hidden mt-10" id="contact">
	<div class="absolute inset-0">
		<div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_20%_30%,rgba(30,58,138,0.1),transparent_50%)]"></div>
		<div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(circle_at_80%_70%,rgba(178,34,34,0.1),transparent_50%)]"></div>
	</div>
	<div class="container mx-auto px-4 relative">
		<div class="text-center mb-16 fade-in">
			<span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Get In Touch</span>
			<h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-800 mt-4"> Contact <span class="bg-gradient-to-r from-red-600 to-blue-600 bg-clip-text text-transparent">Our Team</span>
			</h2>
			<p class="text-xl text-gray-600 max-w-3xl mx-auto"> Ready to discuss your scrap management needs? Our expert team is here to help you 24/7 </p>
		</div>
		<div class="grid lg:grid-cols-2 gap-12 max-w-7xl mx-auto">
			<!-- Contact Information -->
			<div class="bg-white/80 backdrop-blur-lg border border-gray-200 text-gray-800 hover:bg-white transition-all duration-500 shadow-xl rounded-lg p-8 slide-in-left delay-300">
				<h3 class="text-3xl flex items-center text-gray-800 mb-6">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-3 h-8 w-8 text-red-600 lucide lucide-message-circle-icon lucide-message-circle"><path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"/></svg>
					Get In Touch
				</h3>
				<p class="text-gray-600 mb-8">We're here to help with all your scrap management needs</p>
				<div class="space-y-8">
					<div class="group flex items-start space-x-6 p-4 rounded-xl hover:bg-gray-50 transition-all duration-300 cursor-pointer" onclick="window.open('https://maps.app.goo.gl/jy5egWRuR0GwgUX4f', '_blank')">
						<div class="flex-shrink-0 w-14 h-14 bg-gradient-to-r from-red-600 to-red-700 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-7 w-7 text-white lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
						</div>
						<div>
							<h4 class="font-semibold text-xl mb-3 group-hover:text-red-600 transition-colors"> Office Address (Click to view on Maps) </h4>
							<p class="text-gray-600 leading-relaxed"> Complex Putra Jaya Bintan Tahap 3 <br /> Blok. AO, No.17, RT 003/ RW 014 <br /> Kelurahan Sagulung Kota, <br /> Kecamatan Sagulung, Batam Kota <br /> Kepulauan Riau, 29438 </p>
						</div>
					</div>
					<div class="group flex items-center space-x-6 p-4 rounded-xl hover:bg-gray-50 transition-all duration-300 cursor-pointer" onclick="window.open('https://wa.me/6281364588546', '_blank')">
						<div class="flex-shrink-0 w-14 h-14 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
							<!--<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-7 w-7 text-white lucide lucide-phone-icon lucide-phone"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>-->
							<svg class="h-7 w-7 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                              <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                              <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                            </svg>
						</div>
						<div>
							<h4 class="font-semibold text-xl mb-2 group-hover:text-green-600 transition-colors"> WhatsApp (Click to chat) </h4>
							<p class="text-gray-600 text-lg">+62 813 6458 8546</p>
						</div>
					</div>
					<div class="group flex items-center space-x-6 p-4 rounded-xl hover:bg-gray-50 transition-all duration-300 cursor-pointer" onclick="window.open('mailto:darruss@radar-ms.com', '_blank')">
						<div class="flex-shrink-0 w-14 h-14 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-7 w-7 text-white lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
						</div>
						<div>
							<h4 class="font-semibold text-xl mb-2 group-hover:text-purple-600 transition-colors"> Email Address (Click to send) </h4>
							<p class="text-gray-600 text-lg">darruss@radar-ms.com</p>
						</div>
					</div>
					<div class="group flex items-center space-x-6 p-4 rounded-xl hover:bg-gray-50 transition-all duration-300">
						<div class="flex-shrink-0 w-14 h-14 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-7 w-7 text-white lucide lucide-clock-icon lucide-clock"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
						</div>
						<div>
							<h4 class="font-semibold text-xl mb-2 group-hover:text-orange-600 transition-colors"> Operating Hours </h4>
							<p class="text-gray-600 text-lg">24/7 Support System</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Contact Person -->
			<div class="bg-white border-0 shadow-2xl hover:shadow-3xl transition-all duration-500 rounded-lg overflow-hidden slide-in-right delay-500">
				<div class="bg-gradient-to-r from-red-50 to-blue-50 p-8">
					<h3 class="flex items-center text-2xl text-gray-800">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-3 h-8 w-8 text-red-600 lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
						Contact Person
					</h3>
					<p class="text-gray-600">Direct line to our management team</p>
				</div>
				<div class="p-8">
					<div class="bg-gradient-to-br from-red-50 to-blue-50 p-8 rounded-2xl mb-8 border border-blue-100">
						<div class="text-center mb-6">
							<div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-r from-red-600 to-blue-600 rounded-full flex items-center justify-center text-white text-2xl font-bold"> DS </div>
							<h3 class="text-2xl font-bold text-gray-800 mb-2">DARRUSS SALIM EFENDI</h3>
							<p class="text-red-600 font-semibold mb-4">General Manager</p>
							<span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Radar Mandiri Sukses</span>
						</div>
						<div class="space-y-4">
							<div class="flex items-center space-x-4 p-3 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
								<div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-green-600 lucide lucide-phone-icon lucide-phone"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
								</div>
								<div>
									<p class="text-sm text-gray-600">Direct Phone</p>
									<p class="font-semibold text-gray-800">+62 813 6458 8546</p>
								</div>
							</div>
							<div class="flex items-center space-x-4 p-3 bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow">
								<div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 text-blue-600 lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
								</div>
								<div>
									<p class="text-sm text-gray-600">Direct Email</p>
									<p class="font-semibold text-gray-800">darruss@radar-ms.com</p>
								</div>
							</div>
						</div>
					</div>
					<div class="space-y-4">
						<a class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 px-6 py-3 rounded-lg flex items-center justify-center" href="https://wa.me/6281364588546" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5 lucide lucide-phone-icon lucide-phone"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
							WhatsApp Now for Free Quote
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 h-5 w-5 lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
						</a>
						<a class="w-full border-2 border-blue-200 text-blue-600 hover:bg-blue-50 hover:border-blue-300 transition-all duration-300 bg-transparent px-6 py-3 rounded-lg flex items-center justify-center" href="mailto:darruss@radar-ms.com" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5 lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
							Send Gmail Inquiry
						</a>
					</div>
					<div class="mt-8 p-6 bg-gradient-to-r from-red-50 to-blue-50 rounded-xl border border-blue-100">
						<h4 class="font-semibold text-gray-800 mb-3 flex items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5 text-blue-600 lucide lucide-message-circle-icon lucide-message-circle"><path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719"/></svg>
							Need More Information?
						</h4>
						<p class="text-sm text-gray-700 leading-relaxed"> Contact us for free consultation regarding scrap management and recycling services. Our expert team is ready to assist you 24/7 with professional solutions tailored to your needs. </p>
					</div>
				</div>
			</div>
		</div>
		<!-- Call to Action -->
		<div class="text-center mt-16 fade-in delay-700">
			<div class="bg-white/80 backdrop-blur-lg border border-gray-200 inline-block shadow-xl rounded-lg p-8">
				<h3 class="text-2xl font-bold mb-4 text-gray-800">Ready to Get Started?</h3>
				<p class="text-gray-600 mb-6 max-w-2xl"> Join hundreds of satisfied clients who trust Radar Mandiri Sukses for their scrap management needs </p>
				<div class="flex flex-wrap justify-center gap-4">
					<a class="bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 text-white px-8 py-3 rounded-lg flex items-center" href="https://wa.me/6281364588546" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5 lucide lucide-phone-icon lucide-phone"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
						Get Free Assessment
					</a>
					<a class="text-gray-700 border border-gray-300 hover:bg-gray-100 bg-white/80 backdrop-blur-sm px-8 py-3 rounded-lg flex items-center" href="mailto:darruss@radar-ms.com" target="_blank">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2 h-5 w-5 lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
						Request Quote
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>