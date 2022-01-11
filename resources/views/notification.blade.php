<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification</title>
</head>
<body>
    
</body>

<script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6c6300f52b851ee7","version":"2021.12.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}'
        crossorigin="anonymous"></script>
        <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
        <script>
            const beamsClient = new PusherPushNotifications.Client({
            instanceId: "954c8cc3-aa4f-445d-b5a7-317d9f0e6758",
            });
            beamsClient
            .start()
            .then((beamsClient) => beamsClient.getDeviceId())
            .then((deviceId) =>
                console.log("Successfully registered with Beams. Device ID:", deviceId)
            )
            .then(() => beamsClient.addDeviceInterest("moiz"))
            .then(() => beamsClient.getDeviceInterests())
            .then((interests) => console.log("Current interests:", interests))
            .catch(console.error);
        </script>
</html>



{{-- const beamsClient = new PusherPushNotifications.Client({
    instanceId: '954c8cc3-aa4f-445d-b5a7-317d9f0e6758',
});

beamsClient.start()
    .then(() => beamsClient.addDeviceInterest('moiz'))
    .then(() => console.log('Successfully registered and subscribed!'))
    .catch(console.error); --}}