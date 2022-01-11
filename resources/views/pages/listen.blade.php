<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="{{asset('assets/js/service-worker.js')}}"></script> --> -->
    <!-- <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script> -->
    <script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
    
    <!-- <meta name="csrf-token" content="{{csrf_token()}}"> -->
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"
</head>
<body>
    <!-- 
        <div id="app">
            
    </div>

    <script src="{{asset('js/app.js')}}"></script> -->

    <script>
  const beamsClient = new PusherPushNotifications.Client({
    instanceId: '954c8cc3-aa4f-445d-b5a7-317d9f0e6758',
  });

  beamsClient.start()
    .then(() => beamsClient.addDeviceInterest('hello'))
    .then(() => console.log('Successfully registered and subscribed!'))
    .catch(console.error);
</script>

    

   
    
</body>
</html>