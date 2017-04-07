//Export default to obtain name from import Into Vue
export default {
    props: {
        submitButton: {
            type: Boolean,
            default: true,
        }
    },
    methods: {
        onWizardNext() {
            //Event Bus = wizardNext
            this.$bus.$on('wizardNext', (step) => {
                if (step === 1) this.submit();
            });
        }
    },
    mounted() {
        this.onWizardNext()
    }
}