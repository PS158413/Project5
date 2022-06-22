import * as React from 'react';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View, TextInput, SafeAreaView, Button} from 'react-native';
// import { TextInput } from 'react-native-paper';


export default function App() {

const [text, onChangeText] = React.useState("Useless Text");
const [number, onChangeNumber] = React.useState(null);
  return (
    <SafeAreaView style={styles.container}>
         <TextInput
        style={styles.input}
        // onChangeText={onChangeNumber}
        // value={number}
        placeholder="Username"
        // keyboardType="numeric"
      /> 
      <TextInput
        style={styles.input}
        // onChangeText={onChangeNumber}
        // value={number}
        placeholder="Password"
        // keyboardType="numeric"
      /> 
      <Button
      style={styles.bLogin}
title="Inloggen"
color="#59CBE8"
/>
      <StatusBar style="auto" />
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#0FEED9',
    alignItems: 'center',
    justifyContent: 'center',
  },
  input: {
    height: 40,
    margin: 12,
   
    borderBottomWidth:1,
    padding: 10,
    width: '35%',
    textAlign : "center",
  },
  Blogin: {
    height: 40,
    margin: 12,
    backgroundColor: '#59CBE8',
   
  },
});
