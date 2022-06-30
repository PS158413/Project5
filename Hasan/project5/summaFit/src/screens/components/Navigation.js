import React, {useContext} from 'react';
import {Text, View} from "react-native";
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import HomeScreen from "../HomeScreen";
import LoginScreen from "../LoginScreen";
import RegisterScreen from "../RegisterScreen";
import SplashScreen from "../SplashScreen";
import {AuthContext} from '../context/AuthContext';


const Stack = createNativeStackNavigator();
const Navigation = () =>{
    const {userInfo, splashLoading} = useContext(AuthContext);
  

    return(
       <NavigationContainer>
        <Stack.Navigator>
        {splashLoading ? (
          <Stack.Screen
            name="Splash Screen"
            component={SplashScreen}
            options={{headerShown: false}}
          />
        ) : userInfo.access_token ? (
          <Stack.Screen name="Home" component={HomeScreen} />
        ) : (
          <>
            <Stack.Screen
              name="Login"
              component={LoginScreen}
              options={{headerShown: false}}
            />
            <Stack.Screen
              name="Register"
              component={RegisterScreen}
              options={{headerShown: false}}
            />
          </>
        )}
            
        </Stack.Navigator>
       </NavigationContainer>
    )
}

export default Navigation;