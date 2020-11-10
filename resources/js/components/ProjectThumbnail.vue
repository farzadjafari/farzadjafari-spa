<template>
    <div class="w-full sm:w-1/2 md:w-1/3 flex p-2">
        <div class="card">
            <a :href="target ? link : 'projects/' + slug" :target="target ? '_blank' : ''">
                <img :src="'img/' + slug + '.png'" class="card-img-top" :alt="slug"
                :title="slug">

                <div class="card-body">
                    <h2 class="text-md md:text-lg lg:text-xl text-center font-bold">{{ name }}</h2>
                </div>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    props: ['name', 'slug', 'link', 'why', 'target']
}
</script>
