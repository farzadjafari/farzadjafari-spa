<template>
    <!--        <script src="https://www.google.com/recaptcha/api.js" async defer></script>-->

    <div>
        <section class="flex container mx-auto flex-wrap">
            <div class="w-full md:w-1/2">
                <h1 class="text-2xl md:text-3xl lg:text-4xl">Hi! I'm <span class="text-dark">Farzad Jafari</span>.</h1>

                <h2 class="text-xl md:text-2xl lg:text-3xl">A Product Manager and a Web Developer based in Boston, MA,
                    US.</h2>

            </div>

            <div class="w-full md:w-1/2">
                <img src="/img/farzad-photo-v2.jpg" class="rounded shadow-lg">
            </div>

        </section>

        <section>
            <div class="container flex mx-auto">
                <div class="shadow-lg px-2 py-4 p-md-5 w-100">
                    <div class="col-12 text-left">
                        <h3 class="text-lg md:text-xl lg:text-2xl">I am really interested in meeting new people.
                            Technology, economy, business, social life, politics and so on.
                            There are always cool topics to discuss about. </h3>
                    </div>

                    <div class="col-12 text-left">
                        <h3 class="text-lg md:text-xl lg:text-2xl">Drop me a message to sit and chat. I am also grateful to take helpful advises from
                            professionals.</h3>

                        <form class="my-5" @submit.prevent="submit">


                            <div class="form-group row mb-4">
                                <div class="col-md-6">
                                    <input id="contact-name" type="text"
                                           class="form-control" name="name"
                                           required autocomplete="name" placeholder="Your name...">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-6">
                                    <input id="contact-email" type="email"
                                           class="form-control" name="email"
                                           required autocomplete="email" placeholder="Your E-mail...">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-6">
                                <textarea id="contact-message"
                                          class="form-control" name="message"
                                          required autocomplete="message" placeholder="Your message..."></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!--<section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4>Find me on social media.</h4>
                    </div>

                    <div class="col-12 text-left mb-4 flex">
                        <a href="https://www.linkedin.com/in/farzad-jafari-8318006a/" target="_blank" class="flex align-items-end pr-5">
                            <i data-feather="linkedin" class="mr-2" style="color:#0e76a8;"></i>
                            LinkeIn
                        </a>

                        <a href="https://github.com/farzadjafari" target="_blank" class="flex align-items-end px-5">
                            <i data-feather="github" class="mr-2" style="color: black"></i>
                            Github
                        </a>

                        <a href="https://twitter.com/farzadjf" target="_blank" class="flex align-items-end px-5">
                            <i data-feather="twitter" class="mr-2" style="color: #00acee;"></i>
                            Twitter
                        </a>
                    </div>
                </div>
            </div>
        </section>-->
    </div>
</template>

<script>
export default {
    data () {
        return {}
    },
    methods : {
      submit() {
          console.log('hi')
      }
    },
    created () {

    }
}
</script>
