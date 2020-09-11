<?php
if (Controller::checkMemberToken()) {
    extract(Controller::$user);
    $debug = [];
    $debug["request"] = $_REQUEST;
    $json = json_encode($debug);
}
?>
{
    template: `
    <header>
        <h1 @click="count++">HEADER {{ count }}</h1>
    </header>
    `,
    data() {
        return {
            count:0
        }
    },
    debug: <?php echo $json ?? 'null' ?>
}