import React from "react";
import {Text, View} from "react-native";
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import HomeScreen from "../HomeScreen";
import LoginScreen from "../LoginScreen";
import RegisterScreen from "../RegisterScreen";


const Stack = createNativeStackNavigator();
const Navigation = () =>{
    return(
       <NavigationContainer>
        <Stack.Navigator>
            <Stack.Screen name="Login" component={LoginScreen} options={{headerShown: false}} />
            <Stack.Screen name="Register" component={RegisterScreen} options={{headerShown: false}}  />

            <Stack.Screen name="Home" component={HomeScreen} />
            
        </Stack.Navigator>
       </NavigationContainer>
    )
}

export default Navigation;