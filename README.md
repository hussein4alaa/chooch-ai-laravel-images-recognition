# app.chooch.ai (laravel images recognition)
### you can create your model and persons with personal images and Find the match between the pictures


![image](https://api.romarkcode.com/storage/images/607403e2823251*cPt2YI-5YxhfL3_Uhw0txA.png)


## Installation:
Require this package with composer using the following command:

```sh
$ composer require g4t/chooch
```



## Usage
##### in your `env` file add `chooch_token="token"`
##### register here to get token `https://app.chooch.ai/` and create model to get `model_id`

## Add the Chooch to your Controller.
```sh
use g4t\Chooch\Chooch;
```


##### Create Person with name in specific model 
```sh
Chooch::CreatePerson('person name', $model_id);
```

##### Insert image to specific person 
```sh
Chooch::InsertPrsonImage($person_id, $request->image);
```

##### Create person with image 
```sh
Chooch::InsertPersonWithImage('person name', $request->image, $model_id);
```

##### Search in specific model using local image 
```sh
Chooch::SearchLocal($request->image, $model_id);
```


##### Search in specific model using local image 
```sh
Chooch::SearchURL($request->image, $model_id);
```




### License

app.chooch.ai (laravel images recognition) is free software licensed under the MIT license.
