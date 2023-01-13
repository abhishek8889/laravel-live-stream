

  const { connect } = require('twilio-video');

connect('RMb441e0026244788070f7ffcd4430fd46', { name:'RM4e3c3caf04ee6f00803df65f6005a31a' }).then(room => {
  console.log(`Successfully joined a Room: ${room}`);
  room.on('participantConnected', participant => {
    console.log(`A remote Participant connected: ${participant}`);
  });
}, error => {
  console.error(`Unable to connect to Room: ${error.message}`);
});