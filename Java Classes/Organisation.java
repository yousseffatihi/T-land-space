import java.util.ArrayList;

public class Organisation {
	private int idOrganisation;
	private String nameOrganisation;
	private String responsible;
	private String email;
	private String password;
	private String dateOrganisation;
	public ArrayList<OrganisationReservation> reserve = new ArrayList<OrganisationReservation>();

	public void addReservation() {
		throw new UnsupportedOperationException();
	}

	public void observeResevervation() {
		throw new UnsupportedOperationException();
	}

	public void deleteReservation() {
		throw new UnsupportedOperationException();
	}

	public void updateReservation() {
		throw new UnsupportedOperationException();
	}
}