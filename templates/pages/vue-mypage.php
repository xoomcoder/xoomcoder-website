<?php

if (Controller::checkMemberToken()) {
    extract(Controller::$user);
    $debug = [];
    $debug["request"] = $_REQUEST;
    $json = json_encode($debug);

    $sections = json_encode([
        [ "id" => "1", "title" => "section1" ],
        [ "id" => "2", "title" => "section2" ],
        [ "id" => "3", "title" => "section3" ],
    ], JSON_PRETTY_PRINT);
}

?>
{
    template: `
    <mycompo1></mycompo1>
    <main>
        <h1 @click="count++">WELCOME {{ username }} {{ count }}</h1>
        <template v-for="section in sections" :key="section.id">
            <section :class="section.class">
                <h2>{{ section.title }}</h2>
            </section>
        </template>
    </main>
    <mycompo3></mycompo3>
    `,
    data() {
        return {
            username: '<?php echo $login ?? "" ?>',
            sections: <?php echo $sections ?? '[]' ?>,
            count:0
        }
    },
    xcompo: {     
        mycompo1 : './vue-mycompo1.vjs', 
        mycompo3 : './vue-mycompo3.vjs',  
    },
    debug: <?php echo $json ?? 'null' ?>
}