import React from 'react';
import axios from 'axios';

const NewMissionComponent = () => {
  const addMission = async () => {
    try {
      const response = await axios.post('http://localhost/api/add_mission.php', {
        titre: 'Nouvelle mission',
        description: 'Description de la nouvelle mission',
        // Ajoutez d'autres données de mission ici...
      });
      console.log(response.data);
    } catch (error) {
      console.error(error);
    }
  };

  return (
    <div>
      <button onClick={addMission}>Ajouter une nouvelle mission</button>
    </div>
  );
};

export default NewMissionComponent;
