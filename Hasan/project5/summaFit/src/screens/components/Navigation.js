import React, { useContext } from 'react';
import { Text, View } from "react-native";

import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';

import HomeScreen from "../HomeScreen";
import LoginScreen from "../LoginScreen";
import RegisterScreen from "../RegisterScreen";
import SplashScreen from "../SplashScreen";

import Exercises from "../Exercises";
import ExerciseDetails from "../ExerciseDetails";
import Profile from "../Profile";
import About from "../About";

import { AuthContext } from '../context/AuthContext';


const Stack = createNativeStackNavigator();
const Tab = createMaterialBottomTabNavigator();

const Navigation = () => {
  const { userInfo, splashLoading } = useContext(AuthContext);


  return (
   
      <Stack.Navigator>
        {splashLoading ? (
          <Stack.Screen
            name="Splash Screen"
            component={SplashScreen}
            options={{ headerShown: false }}
          />
        ) : userInfo.access_token ? (
          <Stack.Screen name="Home" component={HomeScreen} options={{ headerShown: false }} />
        ) : (
          <>
            <Stack.Screen name="Login" component={LoginScreen} options={{ headerShown: false }} />

            <Stack.Screen name="Register" component={RegisterScreen} options={{ headerShown: false }} />

            <Stack.Screen name="Exercise" component={Exercises} />
            <Stack.Screen name="ExerciseDetails" component={ExerciseDetails} />
          </>
        )}

      </Stack.Navigator>

  )
}

const MyTabs = () => {
  return (
    <NavigationContainer>
      <Tab.Navigator>
        {/* <Tab.Screen name="Home" component={Home} /> */}
        <Tab.Screen name="Navigation" component={Navigation}
          options={{tabBarLabel: 'Login'}} />

        {/* <Tab.Screen name="Profile" component={Profile} /> */}
        <Tab.Screen name="Exercises" component={Exercises}
          options={{ tabBarLabel: 'oefeningen' }} />
             <Tab.Screen name="About" component={About}
          options={{ tabBarLabel: 'Over ons' }} />
      </Tab.Navigator>
    </NavigationContainer>
  );
}

export default MyTabs;