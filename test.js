document.addEventListener('DOMContentLoaded', function () {
    const text = [
      "Welcome to Haritha TV , your go-to source for the latest updates and happenings at NSBM Green University! We are your window to the vibrant and dynamic world within our campus, bringing you the most current and relevant news straight from the heart of academic life.",
      "Haritha, meaning \"green\" in Sinhala, embodies our commitment to sustainability, growth, and progress. Just as our university campus thrives with greenery, Haritha TV News aims to cultivate a community well-informed about the exciting developments, achievements, and events within NSBM.",
      "Stay tuned as we cover a spectrum of stories, from academic achievements to cultural events, sports victories, and important announcements. Haritha TV News is not just a news portal; it's a platform that connects you to the pulse of our university life.",
    ];
  
    const paragraph = document.getElementById('paragraph');
  
    // Combine text into a single string
    const fullText = text.join(' ');
  
    // Split the text into an array of characters
    const characters = fullText.split('');
  
    // Set up a counter for animation
    let counter = 0;
  
    // Function to animate the text letter by letter
    function animateText() {
      if (counter < characters.length) {
        // Append the next letter
        paragraph.innerHTML += characters[counter];
        counter++;
  
        // Use anime.js to animate the opacity
        anime({
          targets: '#paragraph',
          opacity: [ 10],
          easing: 'linear',
          duration: 5,
          complete: animateText // Call the function recursively
        });
      }
    }
  
    // Start the animation
    animateText();
  });