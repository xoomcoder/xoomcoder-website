{
    template: `
    <main>
        <h1 @click="count++">MAIN {{ count }}</h1>
    </main>
    `,
    data() {
        return {
            count:0
        }
    }
}