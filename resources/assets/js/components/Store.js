export const state = {
    currentStep: null
}

export const store = {
    state: state,

    changeStep : function (step) {
        state.currentStep = step
    }
}