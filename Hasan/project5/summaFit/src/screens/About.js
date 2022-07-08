import { StyleSheet, Text, View, SafeAreaView } from 'react-native'
import React from 'react'

const About = () => {
  return (
<View style={styles.container}>
    <SafeAreaView  style={{margin:15}}>
      <Text style={{fontSize:30}}>dit is de eerste versie van de app. in de komende tijd komen er verschillende updates dat u uw oefeningen zelf kunt toevogen en uw prestaties kunt bijhouden.</Text>
      <Text style={{fontSize:30, marginTop:15}}>In deze app kunt u inloggen, resistreren en alle oefeningen zien die je kunt uitvoeren.
        Ook kunt u in uw account bekijken welke oefeningen u gedaan heeft, daarbij staat ook hoe lang u erover gedaan heeft
      </Text>
    </SafeAreaView>
    </View>
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