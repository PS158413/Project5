import { StyleSheet, Text, View, SafeAreaView } from 'react-native'
import React from 'react'

const About = () => {
  return (

    <SafeAreaView style={styles.container}>
      <Text style={{fontSize:30}}>deze app is gemaakt door de slimste jongens van heel de wereld.</Text>
      <Text style={{fontSize:30}}>In deze app kunt u inloggen, resistreren en alle oefeningen zien die je kunt uitvoeren.
        Ook kunt u in uw account bekijken welke oefeningen u gedaan heeft, daarbij staat ook hoe lang u erover gedaan heeft
      </Text>
    </SafeAreaView>
  )
}

export default About

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#0FEED9',
        alignItems: 'center',
        justifyContent: 'center',
      },
})