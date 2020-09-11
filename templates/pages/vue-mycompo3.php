{
    template: `
    <footer>
        <h1 @click="count++">FOOTER {{ count }}</h1>
    </footer>
    `,
    data() {
        return {
            count:0
        }
    }
}