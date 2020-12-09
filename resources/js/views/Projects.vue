<template>
    <div>
        <section class="flex container flex-col">
            <h1 class="text-2xl md:text-3xl lg:text-4xl mb-12 text-center">Projects</h1>

            <div class="flex flex-wrap">
                <project-pulse v-for="index in 10" :key="index" v-if="isPulsing"></project-pulse>

                <project-thumbnail v-for="(project, i) in projects" :key="i"
                                   :name="project.name"
                                   :slug="project.slug"
                                   :link="project.link"
                                   :why="project.why"
                                   :target="!project.why"
                                   v-if="!isPulsing"
                ></project-thumbnail>
            </div>
        </section>
    </div>
</template>

<script>

import ProjectThumbnail from '../components/ProjectThumbnail'
import ProjectPulse from '../components/ProjectPulse'

export default {
    components: {ProjectThumbnail, ProjectPulse},
    data () {
        return {
            projects: {},
            isPulsing: true,
        }
    },
    created () {
        axios.get('/api/projects')
            .then(response => {
                this.projects = response.data

                this.isPulsing = false
            })
    },
}
</script>
