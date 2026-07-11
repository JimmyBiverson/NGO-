@extends('layouts.app')

@section('title', 'Contact Us')
@section('description', 'Get in touch with Community First Uganda. Email, call, WhatsApp, or visit us in Kampala. We\'d love to hear from you.')

@section('content')

    {{-- Page Hero --}}
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-24 bg-forest-900 overflow-hidden">
        <div class="particle-container absolute inset-0 z-0"></div>
        <div class="absolute inset-0 z-[1] bg-cover bg-center opacity-20" style="background-image: url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920&q=85&fm=webp');"></div>
        <div class="absolute inset-0 opacity-10 noise-overlay"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <span class="inline-block text-xs font-semibold uppercase tracking-widest text-amber-400 bg-white/10 px-4 py-1.5 rounded-full mb-4 reveal">Get in Touch</span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-4 reveal">
                Contact<br><span class="text-amber-400">Us</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/70 max-w-3xl mx-auto leading-relaxed reveal">
                We'd love to hear from you! Whether you have questions, want to volunteer, or are interested in partnerships.
            </p>
        </div>
    </section>

    {{-- Contact Info Cards --}}
    {{-- 4-card grid: Email, Phone, WhatsApp, Visit. Each has an icon, label, value, and hint text. tilt-card adds 3D hover effect. --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8 stagger-children">
                <div class="stagger-item bg-gray-50 rounded-2xl p-8 text-center card-hover tilt-card">
                    <div class="w-14 h-14 rounded-2xl bg-forest-50 flex items-center justify-center text-forest-700 mx-auto mb-5">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    </div>
                    <h2 class="font-bold text-gray-900 mb-2">Email Us</h2>
                    <a href="mailto:info@communityfirstuganda.org" class="text-forest-700 hover:text-amber-600 transition-colors text-sm font-medium">info@communityfirstuganda.org</a>
                    <p class="text-xs text-gray-400 mt-2">We reply within 24 hours</p>
                </div>
                <div class="stagger-item bg-gray-50 rounded-2xl p-8 text-center card-hover tilt-card">
                    <div class="w-14 h-14 rounded-2xl bg-forest-50 flex items-center justify-center text-forest-700 mx-auto mb-5">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </div>
                    <h2 class="font-bold text-gray-900 mb-2">Call Us</h2>
                    <a href="tel:0393249878" class="text-forest-700 hover:text-amber-600 transition-colors text-sm font-medium">0393 249 878</a>
                    <p class="text-xs text-gray-400 mt-2">Mon-Fri, 9AM-5PM</p>
                </div>
                <div class="stagger-item bg-gray-50 rounded-2xl p-8 text-center card-hover tilt-card">
                    <div class="w-14 h-14 rounded-2xl bg-forest-50 flex items-center justify-center text-forest-700 mx-auto mb-5">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    </div>
                    <h2 class="font-bold text-gray-900 mb-2">WhatsApp</h2>
                    <a href="https://wa.me/256393249878" target="_blank" rel="noopener noreferrer" class="text-forest-700 hover:text-green-600 transition-colors text-sm font-medium">+256 393 249 878</a>
                    <p class="text-xs text-gray-400 mt-2">Quick response via chat</p>
                </div>
                <div class="stagger-item bg-gray-50 rounded-2xl p-8 text-center card-hover tilt-card">
                    <div class="w-14 h-14 rounded-2xl bg-forest-50 flex items-center justify-center text-forest-700 mx-auto mb-5">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h2 class="font-bold text-gray-900 mb-2">Visit Us</h2>
                    <p class="text-gray-600 text-sm">Noor Emporium<br>Mengo Hill Rd, Kampala</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Form + Sidebar --}}
    <section class="py-16 sm:py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 lg:gap-12">

                {{-- Form --}}
                <div class="lg:col-span-3 reveal-left">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Send us a Message</h2>
                    <p class="text-gray-600 text-sm mb-8">Fill out the form below and we'll get back to you within 24 hours.</p>

                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                        <form method="POST" action="{{ route('contact.submit') }}" data-validate class="space-y-5">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div class="form-group">
                                    <label for="name" class="form-label">Full Name <span class="text-red-500">*</span></label>
                                    <input type="text" id="name" name="name" required class="form-input" placeholder="Your name">
                                    <span class="form-error text-xs text-red-500 mt-1 block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address <span class="text-red-500">*</span></label>
                                    <input type="email" id="email" name="email" required class="form-input" placeholder="your@email.com">
                                    <span class="form-error text-xs text-red-500 mt-1 block"></span>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div class="form-group">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" class="form-input" placeholder="+256 XXX XXX XXX">
                                </div>
                                <div class="form-group">
                                    <label for="reason" class="form-label">Reason for Contact <span class="text-red-500">*</span></label>
                                    <select id="reason" name="reason" required class="form-input appearance-none bg-white">
                                        <option value="">Select a reason</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="volunteer">Volunteer Opportunities</option>
                                        <option value="partnership">Partnership Proposal</option>
                                        <option value="donation">Donation Information</option>
                                        <option value="program">Program Information</option>
                                        <option value="media">Media Request</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <span class="form-error text-xs text-red-500 mt-1 block"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject" class="form-label">Subject <span class="text-red-500">*</span></label>
                                <input type="text" id="subject" name="subject" required class="form-input" placeholder="Message subject">
                                <span class="form-error text-xs text-red-500 mt-1 block"></span>
                            </div>

                            <div class="form-group">
                                <label for="message" class="form-label">Message <span class="text-red-500">*</span></label>
                                <textarea id="message" name="message" rows="5" required class="form-input" placeholder="Your message..."></textarea>
                                <span class="form-error text-xs text-red-500 mt-1 block"></span>
                            </div>

                            <button type="submit"
                                    class="magnetic-btn w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-full text-white font-semibold text-sm transition-all duration-300 donate-btn shadow-lg hover:shadow-xl">
                                <span>Send Message</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="lg:col-span-2 reveal-right space-y-8">

                    {{-- Office Hours --}}
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                        <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Office Hours
                        </h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                <span class="text-gray-600">Monday - Friday</span>
                                <span class="font-medium text-gray-900">9:00 AM - 5:00 PM</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                <span class="text-gray-600">Saturday</span>
                                <span class="font-medium text-gray-900">10:00 AM - 2:00 PM</span>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-between gap-1">
                                <span class="text-gray-600">Sunday</span>
                                <span class="font-medium text-gray-400">Closed</span>
                            </div>
                            <div class="pt-3 mt-3 border-t border-gray-100">
                                <p class="text-xs text-gray-500 italic">Quick Response: We respond to emails within 24 hours during business days. For urgent matters, reach us on WhatsApp.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Location --}}
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                        <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Our Location
                        </h3>
                        <p class="text-sm text-gray-600">Noor Emporium, Mengo Hill Road, Kampala, Uganda</p>
                        <p class="text-xs text-gray-400 mt-1">Located near Mengo Hospital, opposite the market</p>
                        <div class="mt-4 rounded-xl overflow-hidden h-48">
                            <img src="https://images.unsplash.com/photo-1577415124269-fc114e4a84db?w=800&q=85&fm=webp"
                                 alt="Our Location - Kampala"
                                 loading="lazy"
                                 class="w-full h-full object-cover"
                                 onerror="this.parentElement.className='mt-4 rounded-xl overflow-hidden bg-gray-100 h-48 flex items-center justify-center'; this.outerHTML='<div class=\'text-center text-gray-400\'><svg class=\'w-8 h-8 mx-auto mb-2\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\'/><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'1.5\' d=\'M15 11a3 3 0 11-6 0 3 3 0 016 0z\'/></svg><span class=\'text-xs\'>Map: Mengo Hill Rd, Kampala</span><a href=\'https://www.google.com/maps/search/Noor+Emporium+Mengo+Hill+Rd+Kampala\' target=\'_blank\' rel=\'noopener noreferrer\' class=\'block text-xs text-forest-600 hover:text-amber-600 mt-1 font-medium\'>Open in Google Maps</a></div>'">
                        </div>
                    </div>

                    {{-- Social --}}
                    <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                        <h3 class="font-bold text-gray-900 mb-4">Connect With Us</h3>
                        <p class="text-sm text-gray-600 mb-4">Follow us on social media for updates and stories of impact.</p>
                        <div class="flex items-center gap-3">
                            <a href="https://x.com/cofi_ug" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-forest-900 hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                            <a href="https://www.instagram.com/communityfirstuganda/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-forest-900 hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 016.31 2.525c.636-.247 1.363-.416 2.427-.465C8.56 2.013 8.914 2 11.272 2h1.043zm0 1.802h-1.08c-2.404 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.403-.058 3.807v1.08c0 2.404.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h2.16c2.404 0 2.784-.011 3.807-.058.975-.045 1.504-.207 1.857-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-2.16c0-2.404-.011-2.784-.058-3.807-.045-.975-.207-1.504-.344-1.857a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.403-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/></svg>
                            </a>
                            <a href="https://wa.me/256393249878" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-green-600 hover:text-white transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </a>
                        </div>
                    </div>

                    {{-- Quick Contact — prominent WhatsApp CTA in forest-900 dark card --}}
                    <div class="bg-forest-900 rounded-2xl p-8 text-white text-center">
                        <h3 class="font-bold text-lg mb-2">Need Help?</h3>
                        <p class="text-white/70 text-sm mb-4">Chat with us on WhatsApp for quick responses.</p>
                        <a href="https://wa.me/256393249878" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#25D366] text-white font-semibold text-sm hover:bg-[#20BD5A] transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            <span>Chat on WhatsApp</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Back to Top --}}
    <button id="back-to-top" aria-label="Back to top">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>

@endsection
