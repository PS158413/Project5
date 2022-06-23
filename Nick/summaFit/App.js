import * as React from 'react';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View, TextInput, SafeAreaView, Button, TouchableOpacity, ImageBackground } from 'react-native';
// import { TextInput } from 'react-native-paper';


export default function App() {

  const [text, onChangeText] = React.useState("Useless Text");
  const [number, onChangeNumber] = React.useState(null);
  return (
    <View style={styles.container}>
       <ImageBackground source={require('./assets/background_exercise.png')} resizeMode="contain" style={styles.image} >
     <Text style={styles.textsem}  >oefeningen details</Text>
  
     <StatusBar style="auto" />

      </ImageBackground>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex:1,
    flexDirection:'row',  
    alignItems:'center',
    justifyContent:'center',
    textAlignVertical: 'top',
    paddingTop: 0,
paddingBottom: 0
  },

  image: {
    width: "100%",
    height: "100%",
    alignItems: "center",
    justifyContent: "center",
  },
  textsem: {
    height: "70%",
  },
});
