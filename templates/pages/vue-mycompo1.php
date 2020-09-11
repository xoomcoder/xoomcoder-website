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
    }
}