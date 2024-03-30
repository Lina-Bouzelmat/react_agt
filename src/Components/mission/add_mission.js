import React from 'react';
import axios from 'axios';

const NewMissionComponent = () => {
  const addMission = async () => {
    try {
      const response = await axios.post('http://localhost/api/add_mission.php', {
        titre: 'Nouvelle mission',
        description: 'Description de la nouvelle mission',
        type_de_mission: 'type de la mission',
        pays: 'pays où se déroulera la mission',
        statut: 'statut de la mission',
        date_de_debut: 'date du debut de la mission',
        date_de_fin: 'date maximum de fin de la mission',
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
