<template>
    <div class="container">
        <div class="row">
            <h1>Projects</h1>

            <project v-for="project in projects"
                     :name="project.name"
                     :slug="project.slug"
                     :link="project.link"
                     :why="project.why"
                     :target="!project.why"
            ></project>
        </div>
    </div>
</template>

<script>
import Project from './../components/ProjectThumbnail.vue'

export default {
    components: {Project},
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
