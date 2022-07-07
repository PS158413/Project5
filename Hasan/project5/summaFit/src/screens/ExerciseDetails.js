
import React, { useState, useEffect } from 'react';
import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View, ImageBackground, Image, ScrollView, SafeAreaView } from 'react-native';
// import ImageURL from 'https://res.cloudinary.com/summa/raw/upload/v1656438728/Project5/beschrijving/${foto}'


export default function App({ route, navigation }) {
  const [data, setData] = useState();
  const { id, name, description, image } = route.params;

  const fetchData = async () => {
    const resp = await fetch(`https://sleepy-sea-01167.herokuapp.com/api/exercise${id}`);
    const data = await resp.json();
    console.log(data);

    console.log(resp.title);
    setData(data);
  };

  useEffect(() => {
    fetchData();
  }, []);

const ImagesExample = () => (
  <Image source = {{uri:`https://res.cloudinary.com/summa/raw/upload/v1656438728/Project5/beschrijving/${image}`}}
  style = {{ width: 200, height: 200 }}
  />
  
)
console.log(image);

  return (
    <SafeAreaView style={styles.container}>
      {/* <ImageBackground source={require('../assets/bgOmschrijving.png')} resizeMode="cover" style={styles.image} > */}

        <Text style={styles.texttop}>Oefeningen details</Text>

        <ScrollView style={styles.details}>
          <Text style={styles.description}>Oefening: {name}</Text>
          {/* <Text style={styles.description} source = {{uri:`https://res.cloudinary.com/summa/raw/upload/v1656438728/Project5/beschrijving/${beschrijving}`}}> {}</Text> */}
          <Text style={styles.description}>Beschrijving: {description}</Text>
 
          <Image style={{backgroundColor: 'red',  width: 380, height:300 }} source = {{uri:`https://res.cloudinary.com/summa/image/upload/v1656438446/Project5${image}`}}/>
        
        </ScrollView>
        <StatusBar style="auto"/>
      {/* </ImageBackground> */}

    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    flexDirection: 'row',
    alignItems: 'center',
    alignContent: 'flex-start',
    justifyContent: 'flex-start',
  },

  image: {
    width: "100%",
    height: "100%",
    alignItems: "center",
    justifyContent: "center",
  },
  texttop: {
    height: "20%",

    fontSize: 32,
  },
  description: {
    fontSize: 30,
    fontWeight: '300', // Light
  },

  details: {
    height: "80%",
  },
});
