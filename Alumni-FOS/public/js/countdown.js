document.addEventListener('DOMContentLoaded', (event) => {
    // Set the initial time in seconds
    let time = 1 * 60; // 5 minutes

    const countdownElement = document.getElementById('countdown');

    // Function to update the countdown display
    function updateCountdown() {
        // Calculate minutes and seconds
        const minutes = Math.floor(time / 60);
        const seconds = time % 60;

        // Format the display as MM:SS
        countdownElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

        // Decrement the time
        time--;

        // Check if the time is up
        if (time < 0) {
            clearInterval(interval);
            // Additional logic when the countdown ends
            alert('Code expired. Please request a new one.');
        }
    }

    // Update the countdown display every second
    const interval = setInterval(updateCountdown, 1000);

    // Initial call to set the countdown immediately
    updateCountdown();
});
