<template>
    <div>
        <section class="flex container flex-col">
            <h1 class="text-2xl md:text-3xl lg:text-4xl mb-12 text-center flex justify-center">{{ project.name }}
                <a :href="project.link" target="_blank">
                    <i data-feather="external-link" class="mr-2"></i>
                </a>
            </h1>


            <div class="col-12 text-left">
                <div class="content-wrapper project">
                    <h3 class="text-lg md:text-xl lg:text-2xl">Why?</h3>
                    <description-pulse v-if="pulsing"></description-pulse>
                    <div v-html="project.why" v-if="!pulsing" class="mb-4 pl-8"></div>

                    <h3 class="text-lg md:text-xl lg:text-2xl">How?</h3>
                    <description-pulse v-if="pulsing"></description-pulse>
                    <div v-html="project.how" v-if="!pulsing" class="mb-4 pl-8"></div>

                    <h3 class="text-lg md:text-xl lg:text-2xl">What?</h3>
                    <description-pulse v-if="pulsing"></description-pulse>
                    <div v-html="project.what" v-if="!pulsing" class="mb-4 pl-8"></div>

                    <h3 class="text-lg md:text-xl lg:text-2xl">Challenges!<small>*</small></h3>
                    <description-pulse v-if="pulsing"></description-pulse>
                    <div v-html="project.challenge" v-if="!pulsing" class="mb-4 pl-8"></div>
                </div>
            </div>

            <p><small><i>* When a physical or intellectual product does not work as what it is expected to be, most of the
                people are not confident discussing it. One of the reasons is that talking about the challenges could be
                tough and uncomfortable. For me, it is very crucial to share the challenges that I came across which
                caused my product not work as great as an idea. Maybe it becomes a clue to someone else who brings up a
                more powerful product. I believe every challenges and failure are the steps towards success.
            </i></small></p>
        </section>
    </div>
</template>

<script>
import DescriptionPulse from '../components/DescriptionPulse'

export default {
    components: {DescriptionPulse},
    data () {
        return {
            project: '',
            pulsing: true
        }
    },
    mounted () {
        axios.get('/api/projects/' + this.$route.params.slug)
            .then(response => {
                this.project = response.data

                this.pulsing = false
            })
    }
}
</script>
