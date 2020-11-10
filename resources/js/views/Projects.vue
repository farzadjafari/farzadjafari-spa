<template>
    <div>
        <section class="flex container flex-col">
            <h1 class="text-2xl md:text-3xl lg:text-4xl mb-12 text-center">Projects</h1>

            <div class="flex flex-wrap">
                <project-thumbnail v-for="project in projects"
                                   :name="project.name"
                                   :slug="project.slug"
                                   :link="project.link"
                                   :why="project.why"
                                   :target="!project.why"
                ></project-thumbnail>
            </div>
        </section>
    </div>
</template>

<script>
import ProjectThumbnail from './../components/ProjectThumbnail.vue'

export default {
    components: {ProjectThumbnail},
    data () {
        return {
            projects: {}
        }
    },
    created () {
        axios.get('/api/projects')
            .then(response => {
                this.projects = response.data
            })
    },
}
</script>
