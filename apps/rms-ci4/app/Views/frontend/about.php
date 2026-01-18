<?= $this->extend('frontend/layout_public') ?>

<?= $this->section('content') ?>

<section class="py-20 bg-gradient-to-br from-white via-red-50 to-blue-50 relative overflow-hidden mt-10" id="about">
	<div class="absolute inset-0 opacity-10">
		<div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_50%_50%,rgba(59,130,246,0.1),transparent_50%)]"></div>
	</div>
	<div class="container mx-auto px-4 relative">
		<div class="max-w-6xl mx-auto">
			<div class="text-center mb-16 fade-in">
				<span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">Welcome To Our Company</span>
				<h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6 mt-4"> About <span class="bg-gradient-to-r from-red-600 to-blue-600 bg-clip-text text-transparent">Radar Mandiri Sukses</span>
				</h2>
				<p class="text-xl text-gray-600 max-w-3xl mx-auto"> Leading Indonesia's sustainable future through innovative scrap management and recycling solutions </p>
			</div>
			<div class="grid lg:grid-cols-2 gap-12 mb-16">
				<!-- Company Overview -->
				<div class="bg-white/80 backdrop-blur-sm border-0 shadow-xl hover:shadow-2xl transition-all duration-500 rounded-lg p-8 slide-in-left delay-300">
					<div class="flex items-center mb-6">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-blue-600 mr-3 lucide lucide-handshake-icon lucide-handshake"><path d="m11 17 2 2a1 1 0 1 0 3-3"/><path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4"/><path d="m21 3 1 11h-2"/><path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3"/><path d="M3 4h8"/></svg>
						<h3 class="text-2xl font-bold text-gray-800">Company Overview</h3>
					</div>
					<div class="space-y-4 text-gray-600 leading-relaxed">
						<p> We are a young company based in Batam, Indonesia. Equipped with a team of dedicated, well-trained, and qualified human resources. We are ready to mobilize if needed at any location across the globe. </p>
						<p> Our vast networks of skilled and qualified human resources are backed up with more than a decade of years invaluable experience. </p>
						<p> Since 2024, Radar Mandiri Sukses has been at the forefront of Indonesia's scrap management industry, demonstrating our business expertise and commitment to excellence in the shortest possible time. </p>
					</div>
				</div>
				<div class="space-y-6 slide-in-right delay-500">
					<div class="bg-gradient-to-br from-red-500 to-red-600 text-white border-0 shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 rounded-lg p-6">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 mb-4 text-red-200 lucide lucide-target-icon lucide-target"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
						<h4 class="text-xl font-bold mb-2">Our Mission</h4>
						<p class="text-red-100"> To deliver optimum service to our clients while developing our people's skills and creating an environment that measures achievement through safety, quality, and customer satisfaction. </p>
					</div>
					<div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white border-0 shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 rounded-lg p-6">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 mb-4 text-blue-200 lucide lucide-award-icon lucide-award"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>
						<h4 class="text-xl font-bold mb-2">Our Vision</h4>
						<p class="text-blue-100"> To deliver excellent services and professional results with cost-effective alternatives, becoming Indonesia's leading sustainable waste management company. </p>
					</div>
				</div>
			</div>
			<!-- Core Values -->
			<div class="fade-in delay-700">
				<h3 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Core Values</h3>
				<div class="grid md:grid-cols-3 gap-8">
					<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg p-8 text-center">
						<div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-red-500 to-red-600 flex items-center justify-center text-white text-3xl font-bold group-hover:scale-110 transition-transform duration-300"> R </div>
						<div class="text-gray-600 mb-4 group-hover:text-blue-600 transition-colors flex justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-star-icon lucide-star"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg>
						</div>
						<h4 class="text-xl font-bold text-gray-800 mb-4">REPUTATION</h4>
						<p class="text-gray-600 leading-relaxed"> Consistently delivering quality builds a positive reputation, attracting more customers and opportunities. </p>
					</div>
					<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg p-8 text-center">
						<div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center text-white text-3xl font-bold group-hover:scale-110 transition-transform duration-300"> M </div>
						<div class="text-gray-600 mb-4 group-hover:text-blue-600 transition-colors flex justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-zap-icon lucide-zap"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/></svg>
						</div>
						<h4 class="text-xl font-bold text-gray-800 mb-4">MOTIVATION</h4>
						<p class="text-gray-600 leading-relaxed"> Dignifying team passion for goals, motivating employees to go the extra mile and stay committed. </p>
					</div>
					<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg p-8 text-center">
						<div class="w-20 h-20 mx-auto mb-6 rounded-full bg-gradient-to-r from-red-500 to-red-600 flex items-center justify-center text-white text-3xl font-bold group-hover:scale-110 transition-transform duration-300"> S </div>
						<div class="text-gray-600 mb-4 group-hover:text-blue-600 transition-colors flex justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 lucide lucide-heart-icon lucide-heart"><path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5"/></svg>
						</div>
						<h4 class="text-xl font-bold text-gray-800 mb-4">SATISFACTION</h4>
						<p class="text-gray-600 leading-relaxed"> Customer satisfaction is our priority, resulting in greater retention and increasing trust. </p>
					</div>
				</div>
			</div>
			<!-- Company Strengths -->
		</div>
		<div class="absolute inset-0 opacity-5">
			<div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_80%_20%,rgba(59,130,246,0.1),transparent_50%)]"></div>
		</div>
		<div class="container mx-auto px-4 relative">
			<div class="text-center mb-16 mt-16 fade-in">
				<h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6 mt-4"> Our <span class="bg-gradient-to-r from-red-600 to-blue-600 bg-clip-text text-transparent">Professional Team</span>
				</h2>
				<p class="text-xl text-gray-600 max-w-3xl mx-auto"> Dedicated, well-trained, and qualified human resources ready to serve globally </p>
			</div>
			<div class="max-w-6xl mx-auto">
				<!-- Team Strengths -->
				<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
					<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg p-8 text-center slide-in-bottom delay-300">
						<div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 lucide lucide-users-icon lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
						</div>
						<h3 class="text-xl font-bold text-gray-800 mb-4 group-hover:text-blue-600 transition-colors">Skilled Human Resources</h3>
						<p class="text-gray-600 leading-relaxed">Vast networks of qualified professionals with specialized expertise</p>
					</div>
					<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg p-8 text-center slide-in-bottom delay-500">
						<div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-r from-red-500 to-red-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 lucide lucide-award-icon lucide-award"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>
						</div>
						<h3 class="text-xl font-bold text-gray-800 mb-4 group-hover:text-blue-600 transition-colors">Decade of Experience</h3>
						<p class="text-gray-600 leading-relaxed">More than a decade of invaluable experience in various industries</p>
					</div>
					<div class="group bg-white border-0 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 rounded-lg p-8 text-center slide-in-bottom delay-700">
						<div class="w-20 h-20 mx-auto mb-6 rounded-2xl bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-300 shadow-lg">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 lucide lucide-globe-icon lucide-globe"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
						</div>
						<h3 class="text-xl font-bold text-gray-800 mb-4 group-hover:text-blue-600 transition-colors">Global Mobility</h3>
						<p class="text-gray-600 leading-relaxed">Ready to mobilize at any location across the globe when needed</p>
					</div>
				</div>
				<!-- Team Capabilities -->
				<div class="bg-gradient-to-r from-red-50 via-white to-blue-50 border-0 shadow-xl rounded-lg p-12 fade-in delay-900">
					<h3 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Team Capabilities</h3>
					<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
						<div class="text-center">
							<div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-red-500 to-blue-500 rounded-full flex items-center justify-center text-white">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 lucide lucide-user-icon lucide-user"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
							</div>
							<h4 class="font-semibold text-gray-800 mb-2">Dedicated Personnel</h4>
							<p class="text-sm text-gray-600">Well-trained and committed team members</p>
						</div>
						<div class="text-center">
							<div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-red-500 to-blue-500 rounded-full flex items-center justify-center text-white">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 lucide lucide-award-icon lucide-award"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>
							</div>
							<h4 class="font-semibold text-gray-800 mb-2">Quality Training</h4>
							<p class="text-sm text-gray-600">Continuous professional development programs</p>
						</div>
						<div class="text-center">
							<div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-red-500 to-blue-500 rounded-full flex items-center justify-center text-white">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 lucide lucide-globe-icon lucide-globe"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
							</div>
							<h4 class="font-semibold text-gray-800 mb-2">Global Experience</h4>
							<p class="text-sm text-gray-600">International project execution expertise</p>
						</div>
						<div class="text-center">
							<div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-red-500 to-blue-500 rounded-full flex items-center justify-center text-white">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 lucide lucide-clock-icon lucide-clock"><path d="M12 6v6l4 2"/><circle cx="12" cy="12" r="10"/></svg>
							</div>
							<h4 class="font-semibold text-gray-800 mb-2">24/7 Availability</h4>
							<p class="text-sm text-gray-600">Round-the-clock support and service</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>