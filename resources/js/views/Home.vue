<template>
    <div>
        <section class="flex container flex-wrap">
            <div class="w-full md:w-2/3 flex justify-center flex-col mb-2">
                <h1 class="text-2xl md:text-3xl lg:text-4xl">Hi! I'm <span class="text-dark">Farzad Jafari</span>.</h1>

                <h2 class="text-xl md:text-2xl lg:text-3xl">A Product Manager and a Web Developer based in Boston, MA,
                    US.</h2>
            </div>

            <div class="w-full md:w-1/3">
                <img src="/img/farzad-photo-v2.jpg" class="rounded shadow-lg">
            </div>
        </section>

        <section>
            <div class="container flex">
                <div class="shadow-lg p-4 md:p-12">
                    <div class="text-left">
                        <h3 class="text-lg md:text-xl lg:text-2xl">I am interested in meeting new people.
                            Technology, economy, business, social life, politics and so on.
                            There are always cool topics to discuss about. </h3>
                    </div>

                    <div class="text-left">
                        <h3 class="text-lg md:text-xl lg:text-2xl">Drop me a message to sit and chat. I am also grateful
                            to take helpful advises from
                            professionals.</h3>

                        <form class="my-5" @submit.prevent="submit" @keydown="form.errors.clear()" style="max-width: 40rem">
                            <div class="mb-4 contain-error">
                                <input id="contact-name" type="text"
                                       class="form-input" name="name" v-model="form.name"
                                       autocomplete="name" placeholder="Your name...">

                                <span class="error" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
                            </div>

                            <div class="mb-4 contain-error">
                                <input id="contact-email" type="email"
                                       class="form-input" name="email" v-model="form.email"
                                       autocomplete="email" placeholder="Your E-mail...">

                                <span class="error" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
                            </div>

                            <div class="mb-4 contain-error">
                                <textarea id="contact-message"
                                          class="form-input" name="message" v-model="form.message"
                                          autocomplete="message" placeholder="Your message..."></textarea>

                                <span class="error" v-if="form.errors.has('message')" v-text="form.errors.get('message')"></span>
                            </div>

                            <div class="my-3 g-recaptcha" :data-sitekey="recaptcha"></div>

                            <button type="submit" class="btn mb-4" :class="{'opacity-50 cursor-auto hover:bg-blue-500' : form.errors.any() }" :disabled="form.errors.any()">Submit</button>

                            <div class="bg-green-400 text-white text-sm p-2 rounded" v-if="message" v-text="message"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h4 class="mb-4">Find me on social media:</h4>

                <div class="text-left mb-4 flex flex-col md:flex-row">
                    <a href="https://www.linkedin.com/in/farzad-jafari-8318006a/" target="_blank"
                       class="flex items-end md:pr-5 mb-2">
                        <i data-feather="linkedin" class="mr-2" style="color:#0e76a8;"></i>
                        LinkedIn
                    </a>

                    <a href="https://github.com/farzadjafari" target="_blank" class="flex items-end mb-2 md:px-5">
                        <i data-feather="github" class="mr-2" style="color: black"></i>
                        Github
                    </a>

                    <a href="https://twitter.com/farzadjf" target="_blank" class="flex items-end mb-2 md:px-5">
                        <i data-feather="twitter" class="mr-2" style="color: #00acee;"></i>
                        Twitter
                    </a>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data () {
        return {
            recaptcha: process.env.MIX_GOOGLE_RECAPTCHA_KEY ,
            form: new Form({name: '', email: '', message: ''}),
            message: '',
        }
    },
    methods: {
        submit () {
            this.form.post('/contacts').then(response => {
                this.message = response.message
            })
        }
    },
    mounted () {
        let recaptchaScript = document.createElement('script')
        recaptchaScript.setAttribute('src', 'https://www.google.com/recaptcha/api.js')
        document.head.appendChild(recaptchaScript)

        feather.replace()
    }
}
</script>
