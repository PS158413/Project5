import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View, TextInput, } from 'react-native';

export default function App() {
  return (
    <View style={styles.container}>
     
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#0FEED9',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
