const receiptInput = document.getElementById('receipt-input')

triggerInput = () => {
    receiptInput.dispatchEvent(new Event("input"))
}